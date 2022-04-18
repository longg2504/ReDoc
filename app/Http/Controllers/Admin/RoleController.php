<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Common;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\Role\CreateRoleRequest;
use App\Http\Requests\Admin\Role\UpdateRoleRequest;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role as MainModel;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\SearchRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class RoleController extends AdminController
{

    protected $pathView = "admin.role";
    protected $config = [
        'pagination' => 10
    ];


    protected $rulesCreate;
    protected $attributesCreate;
    protected $rulesUpdate;
    protected $attributesUpdate;

    protected $formFields = [
        ['label' => 'Tên nhóm quyền', 'name' => 'name', 'type' => 'text']
    ];
    protected $listFields = [
        ['label' => 'ID', 'name' => 'id', 'type' => 'text'],
        ['label' => 'Tên nhóm quyền', 'name' => 'name', 'type' => 'text'],
        ['label' => 'Ngày tạo', 'name' => 'created_at', 'type' => 'text'],
        ['label' => 'Ngày sửa', 'name' => 'updated_at', 'type' => 'text'],
    ];

    protected $searchFields = [
        ['label' => 'Id', 'name' => 'id', "type" => 'number'],
        ['label' => 'Tên nhóm quyền', 'name' => 'name', "type" => 'text'],
        ['label' => 'Tất cả', 'name' => 'all', "type" => 'text'],
    ];

    protected $notAcceptedCreateAndEdit = ['_token', 'active'];

    public function __construct()
    {
        $controller = (new \ReflectionClass($this))->getShortName();
        $shortController = Common::getShortNameController($controller);
        $this->controllerName = $shortController;
        $this->folderUpload = $shortController;
        $this->title = ucfirst(str_replace('_', ' ', $shortController));

        view()->share('folderUpload', $this->folderUpload);
        view()->share('formFields', $this->formFields);
        view()->share('listFields', $this->listFields);
        view()->share('controllerName', $this->controllerName);
        view()->share('title', $this->title);
        view()->share('searchFields', $this->searchFields);
        $this->model = new MainModel();
    }

    public function index(Request $request)
    {
        Common::clearCache();

        if (isset($request->search)) {

            $validator = Validator::make($request->all(), (new SearchRequest())->rules(), [], (new SearchRequest())->attributes());

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $param = $request->search;
            $type = $request->search_type;

            $data = $this->model::orderBy('created_at', 'DESC');


            if ($type != "all") {

                $data = $data->where($type, 'LIKE', "%{$param}%");
            } else {

                $data->where(function ($data) use ($param) {

                    $columns = Schema::getColumnListing($this->model->getTable());

                    foreach ($columns as $value) {
                        $data->orWhere($value, 'LIKE', "%{$param}%");
                    }

                    foreach ($this->listFields as $value) {

                        if ($value['type'] == 'text_foreign_key') {

                            $rela = strtolower(explode('\\', $value['data_source'])[2]);

                            $data->orWhereHas($rela, function ($query) use ($value, $param) {
                                $query->where($value['name'], 'LIKE', "%{$param}%");
                            });
                        }
                    }
                });
            }

            $data = $data->paginate($this->config['pagination']);

            return view($this->pathView . '.index')->with([
                'data' => $data,
                'search' => $request->search,
                'search_type' => $request->search_type,
            ]);
        }

        $data = $this->model::orderBy('created_at', 'DESC')->paginate($this->config['pagination']);

        return view($this->pathView . '.index')->with([
            'data' => $data
        ]);
    }

    public function create()
    {
        $this->data = config('permission.list');
        return view($this->pathView . '.add')->with([
            'data' => $this->data
        ]);
    }

    public function store(Request $request)
    {

        try {

            $validator = Validator::make($request->all(), (new CreateRoleRequest)->rules(), $this->messages, (new CreateRoleRequest())->attributes());

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $role = MainModel::create(['name' => $request->name, 'guard_name' => 'admin']);

            $role->syncPermissions($request->permission);

            Common::clearCache();

            Session::flash('success', trans('admin.add_success'));
            return redirect()->route('admin.' . $this->controllerName . '.index');
                } catch (\Exception $ex) {

            dd($ex->getMessage());

            Session::flash('error', trans('admin.add_error') . '. Lỗi: ' . $ex->getMessage());
            return redirect()->route('admin.' . $this->controllerName . ".create");
        }
    }

    public function edit($id)
    {
        $this->data = $this->model::findOrFail($id);
        $this->data['listPermission'] = config('permission.list');

        return view($this->pathView . '.add')->with([
            'data' => $this->data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $this->model::findOrFail($id);

        if (empty($data)) {

            Session::flash('error', trans('admin.data_not_exists'));
            return redirect()->route('admin.' . $this->controllerName . '.index');
        }

        $this->validate(
            $request,
            (new UpdateRoleRequest())->rules(),
            [],
            (new UpdateRoleRequest())->attributes()
        );

        try {

            $role = MainModel::find($id);
            $role->name = $request->input('name');
            $role->save();

            $role->syncPermissions([]);
            $role->givePermissionTo($request->input('permission'));

            Common::clearCache();

            Session::flash('success', trans('admin.update_success'));
            return redirect()->route('admin.' . $this->controllerName . '.index');
                } catch (\Exception $ex) {

            dd($ex->getMessage());

            Session::flash('error', trans('admin.update_error') . '. Lỗi: ' . $ex->getMessage());
            return redirect()->route('admin.' . $this->controllerName . ".index");
        }
    }
}
