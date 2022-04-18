<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Common;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\Administrators\CreateAdministratorRequest;
use App\Http\Requests\Admin\Administrators\UpdateAdministratorRequest;
use App\Models\Administrators as MainModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class AdministratorsController extends AdminController
{

    protected $pathView = "admin.core";
    protected $config = [
        'pagination' => 10
    ];


    protected $rulesCreate;
    protected $attributesCreate;
    protected $rulesUpdate;
    protected $attributesUpdate;

    protected $formFields = [];
    protected $listFields = [];
    protected $searchFields = [];

    protected $notAcceptedIndex = ['password', 'account', 'ref', 'name', 'created_at', 'updated_at', 'name'];
    protected $notAcceptedCreateAndEdit = ['id', '_token', 'created_at', 'updated_at'];
    protected $notAcceptedCreateOnlyEdit = ['password'];

    public function __construct()
    {
        $this->model = new MainModel();

        $controller = (new \ReflectionClass($this))->getShortName();
        $shortController = Common::getShortNameController($controller);
        $this->controllerName = $shortController;
        $this->folderUpload = $shortController;
        $this->formFields = $this->getListFields("crud");
        $this->listFields = $this->getListFields("index");
        $this->searchFields = $this->getListFields("search");
        $this->title = ucfirst(str_replace('_', ' ', $shortController));

        unset($this->listFields[count($this->listFields)-1]);

        view()->share('folderUpload', $this->folderUpload);
        view()->share('formFields', $this->formFields);
        view()->share('listFields', $this->listFields);
        view()->share('controllerName', $this->controllerName);
        view()->share('title', $this->title);
        view()->share('searchFields', $this->searchFields);

        $this->rulesCreate = (new CreateAdministratorRequest())->rules();
        $this->attributesCreate = (new CreateAdministratorRequest)->attributes();

        $this->rulesUpdate = (new UpdateAdministratorRequest());
        $this->attributesUpdate = (new UpdateAdministratorRequest)->attributes();
    }

    public function store(Request $request)
    {

        try {

            $validator = Validator::make($request->all(), $this->rulesCreate, $this->messages, $this->attributesCreate);

            if ($validator->fails()) {
                dd($validator->errors());
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $admin = $this->updateOrCreate($request->all());
            $admin->assignRole(Role::select("name")->where('id', $request->role_id)->first()->name);

            Session::flash('success', trans('admin.add_success'));
            return redirect()->route('admin.' . $this->controllerName . '.index');
                } catch (\Exception $ex) {

            dd($ex->getMessage());

            Session::flash('error', trans('admin.add_error') . '. Lỗi: ' . $ex->getMessage());
            return redirect()->route('admin.' . $this->controllerName . ".create");
        }
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), $this->rulesUpdate->rules($id), $this->messages, $this->attributesUpdate);

        if ($validator->fails()) {
            dd($validator->errors());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $this->data = $this->model::findOrFail($id);

        if (empty($this->data)) {

            Session::flash('error', trans('admin.data_not_exists'));
            return redirect()->route('admin.' . $this->controllerName . '.index');
        }

        try {

            $admin = $this->updateOrCreate($request->all(), $id);
            $admin->syncRoles([]);
            $admin->assignRole(Role::select("name")->where('id', $request->role_id)->first()->name);

            Session::flash('success', trans('admin.update_success'));
            return redirect()->route('admin.' . $this->controllerName . '.index');
                } catch (\Exception $ex) {

            dd($ex->getMessage());

            Session::flash('error', trans('admin.update_error') . '. Lỗi: ' . $ex->getMessage());
            return redirect()->route('admin.' . $this->controllerName . ".index");
        }
    }
}
