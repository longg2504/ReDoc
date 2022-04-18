<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Common;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\Settings\CreateSettingRequest;
use App\Http\Requests\Admin\Settings\UpdateSettingRequest;
use App\Models\Settings as MainModel;
use App\Models\Settings;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SettingsController extends AdminController
{

    protected $pathView = "admin.settings";
    protected $config = [
        'pagination' => 10
    ];


    protected $rulesCreate;
    protected $attributesCreate;
    protected $rulesUpdate;
    protected $attributesUpdate;

    protected $formFields = [
        ['label' => 'Setting type', 'name' => 'type', 'type' => 'select', 'data_source' => Settings::LIST_TYPE],
        ['label' => 'Setting key', 'name' => 'setting_key', 'type' => 'text'],
    ];
    protected $listFields = [
        ['label' => 'ID', 'name' => 'id', 'type' => 'text'],
        ['label' => 'Setting key', 'name' => 'setting_key', 'type' => 'text'],
        ['label' => 'Setting value', 'name' => 'setting_value', 'type' => 'setting_value'],
        ['label' => 'Setting type', 'name' => 'type', 'type' => 'setting_type'],
        ['label' => 'Ngày tạo', 'name' => 'created_at', 'type' => 'text'],
        ['label' => 'Ngày sửa', 'name' => 'updated_at', 'type' => 'text'],
    ];

    protected $searchFields = [
        ['label' => 'Id', 'name' => 'id', "type" => 'number'],
        ['label' => 'Tên', 'name' => 'setting_value', "type" => 'text'],
        ['label' => 'Tất cả', 'name' => 'all', "type" => 'text'],
    ];

    protected $notAcceptedCreateAndEdit = ['_token'];

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

        $this->rulesCreate = (new CreateSettingRequest())->rules(MainModel::class, $this->notAcceptedCreateAndEdit);
        $this->attributesCreate = (new CreateSettingRequest)->attributes();

        $this->rulesUpdate = new UpdateSettingRequest();
        $this->attributesUpdate = (new UpdateSettingRequest)->attributes();
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), $this->rulesUpdate->rules($id), [], $this->attributesUpdate);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $this->data = $this->model::findOrFail($id);

        if (empty($this->data)) {

            Session::flash('error', trans('admin.data_not_exists'));
            return redirect()->route('admin.' . $this->controllerName . '.index');
        }

        try {

            $this->updateOrCreate($request->all(), $id);

            Session::flash('success', trans('admin.update_success'));
            return redirect()->route('admin.' . $this->controllerName . '.index');
        } catch (\Exception $ex) {

            Session::flash('error', trans('admin.update_error') . '. Lỗi: ' . $ex->getMessage());
            return redirect()->route('admin.' . $this->controllerName . ".index");
        }
    }
}
