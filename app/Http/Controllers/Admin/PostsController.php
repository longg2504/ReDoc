<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Common;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\RequireRequest;
use App\Http\Requests\Admin\UpdateRequest;
use App\Models\Posts as MainModel;

class PostsController extends AdminController
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

    protected $notAcceptedIndex = ['password', 'created_at', 'updated_at'];
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
        $this->title = ucfirst(str_replace(['_', '-'], ' ', $shortController));

        view()->share('folderUpload', $this->folderUpload);
        view()->share('formFields', $this->formFields);
        view()->share('listFields', $this->listFields);
        view()->share('controllerName', $this->controllerName);
        view()->share('title', $this->title);
        view()->share('searchFields', $this->searchFields);

        $this->rulesCreate = (new RequireRequest())->rules(MainModel::class, $this->notAcceptedCreateAndEdit);
        $this->attributesCreate = (new RequireRequest)->attributes();

        $this->rulesUpdate = (new UpdateRequest())->rules(MainModel::class, $this->notAcceptedCreateOnlyEdit);
        $this->attributesUpdate = (new UpdateRequest)->attributes();
    }
}
