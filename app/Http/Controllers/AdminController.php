<?php

namespace App\Http\Controllers;

use App\Helper\Common;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Admin\SearchRequest;
use App\Models\Media;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class AdminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $folderUpload;
    protected $config;
    protected $model;
    protected $messages = "";


    public function index(Request $request)
    {

        // Template search
        if (isset($request->search)) {

            // Check error
            $validator = Validator::make($request->all(), (new SearchRequest())->rules(), [], (new SearchRequest())->attributes());

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Define field
            $param = $request->search;
            $type = $request->search_type;
            $like = $request->search_like;

            $data = $this->model::orderBy('created_at', 'DESC');

            // Search with all field
            if ($type != "all") {

                $foreign = false;

                foreach ($this->searchFields as $value) {

                    if ($value['name'] == $type && $value['type'] == 'text_foreign_key') {

                        $temp = explode('\\', $value['data_source']);
                        $rela = strtolower(end($temp));

                        $data->orWhereHas($rela, function ($query) use ($value, $param, $like) {
                            $query->where($value['searchKey'], "$like", "%{$param}%");
                        });

                        $foreign = true;
                    }

                    if ($value['name'] == $type && $value['type'] == 'number') {

                        $data->Where($value['name'], "$like", "$param");
                        $foreign = true;
                    }
                }

                if (!$foreign) {

                    $data = $data->where($type, "$like", "%{$param}%");
                }
            } else {

                $data->where(function ($data) use ($param, $like) {

                    $columns = Schema::getColumnListing($this->model->getTable());

                    foreach ($columns as $value) {
                        $data->orWhere($value, "$like", "%{$param}%");
                    }

                    foreach ($this->listFields as $value) {

                        if ($value['type'] == 'text_foreign_key') {

                            $temp = explode('\\', $value['data_source']);
                            $rela = strtolower(end($temp));

                            $data->orWhereHas($rela, function ($query) use ($value, $param, $like) {
                                $query->where($value['name'], "$like", "%{$param}%");
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
                'title' => $this->title
            ]);
        }

        $data = $this->model::orderBy('created_at', 'DESC')->paginate($this->config['pagination']);

        return view($this->pathView . '.index')->with([
            'data' => $data,
            'title' => $this->title
        ]);
    }

    public function create()
    {
        return view($this->pathView . '.add')->with([
            'title' => $this->title
        ]);
    }

    public function store(Request $request)
    {

        try {

            $validator = Validator::make($request->all(), $this->rulesCreate, [], $this->attributesCreate);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $this->updateOrCreate($request->all());

            Session::flash('success', trans('admin.add_success'));
            return redirect()->route('admin.' . $this->controllerName . '.index');
        } catch (\Exception $ex) {

            Session::flash('error', trans('admin.add_error') . '. Lỗi: ' . $ex->getMessage());
            return redirect()->route('admin.' . $this->controllerName . ".create");
        }
    }

    public function edit($id)
    {

        $this->data = $this->model::findOrFail($id);

        if (empty($this->data)) {

            Session::flash('error', trans('admin.data_not_exists'));
            return redirect()->route('admin.' . $this->controllerName . '.index');
        }

        return view($this->pathView . '.add')->with([
            'data' => $this->data,
            'title' => $this->title
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->rulesUpdate, [], $this->attributesUpdate);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // dd($request->all());

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

    public function deleteMain($id)
    {
        $this->data = $this->model::findOrFail($id);

        if (empty($this->data)) {

            Session::flash('error', trans('admin.data_not_exists'));
            return redirect()->route('admin.' . $this->controllerName . '.index');
        }

        if (isset($this->data->thumbnail_id)) {

            $media = $this->data->media;
            $this->deleteThumb($media->path, $media->name, $media->type);
        }

        $this->data->delete();
    }

    public function delete($id)
    {
        try {

            $this->deleteMain($id);
            Session::flash('success', trans('admin.delete_success'));

            return redirect()->route('admin.' . $this->controllerName . ".index");
        } catch (\Exception $ex) {

            Session::flash('error', trans('admin.delete_error') . '. Lỗi: ' . $ex->getMessage());
            return redirect()->route('admin.' . $this->controllerName . ".index");
        }
    }

    public function multiDelete(Request $request)
    {

        $cId = $request->cid;
        if (count($cId) > 0) {
            foreach ($cId as $k => $id) {
                $this->deleteMain($id);
            }
        }

        Session::flash('success', trans('admin.delete_success'));

        return redirect()->route('admin.' . $this->controllerName . ".index");
    }

    public function deleteThumb($path, $name, $type)
    {
        // 0: image, 1: video
        $path = $this->path;
        $orgin = $path . $name;

        if (!empty($name) && file_exists($orgin)) {
            unlink($orgin);
        }

        if ($type == 0) {

            $thumb = $path . 'thumb/' . $name;
            unlink($thumb);
        }
    }

    public function upload($file)
    {
        try {

            if (is_object($file)) {

                $extension = $file->extension();
                $name = Common::createName($this->controllerName, null, $extension);
                $file->storeAs('public/images/' . $this->folderUpload, $name);
                $image_path = $file;
                $image = Image::make($image_path);

                $x400_image = $image->resize(400, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->encode($extension);

                Storage::put('public/images/' . $this->folderUpload . "/thumb/$name", $x400_image);

                $media = $this->updateOrCreate([
                    'name' => $name,
                    'path' => $this->folderUpload,
                    'type' => 0,
                    'active' => 1
                ], null, new Media());

                return $media->id;
            }

        } catch (\Exception $ex) {

            Session::flash('error', trans('admin.add_error') . '. Lỗi: ' . $ex->getMessage());
            return redirect()->route('admin.' . $this->controllerName . ".index");
        }
    }

    public function uploadmuti($files)
    {
        $data = [];

        foreach ($files as $file) {
            $data[] = $this->upload($file);
        }

        return json_encode($data);
    }

    public function updateOrCreate(array $data, int $id = null, $model = null)
    {
        if (!isset($model)) {
            $model = $this->model;
        } else {
            $model = $model;
        }


        $data = array_diff_key($data, array_flip($this->notAcceptedCreateAndEdit));

        if (!isset($data["active"])) {
            $data["active"] = 0;
        }

        if (isset($id)) {
            $object = $model->findOrFail($id);
        }

        $update = true;

        if (!isset($object)) { // insert
            $className = get_class($model);
            $object = new $className;

            if ($this->checkHasColumn('created_id')) {
                $object->created_id = null;
            }

            $update = false;
        }

        foreach ($data as $key => $value) {

            if (is_object($value)) {
                $value = $this->upload($value);
            }

            if ($key == 'thumbnail_id') {

                if ($update) {

                    $media = $object->media;
                    if (isset($media)) {
                        $this->deleteThumb($media->path, $media->name, $media->type);
                    }
                }

                $value = $this->upload($value);

            }

            if ($key == 'type' && $value == 3) {
                $value = $this->upload($data["setting_value"]);
            }

            $object->{$key} = $value;
        }



        if ($this->checkHasColumn('updated_id')) {
            $object->updated_id = null;
        }

        $object->save();

        return $object;
    }

    public function checkHasColumn(string $column): bool
    {
        return Schema::hasColumn($this->model->getTable(), $column);
    }

    // Return type specific and default
    public function checkType($column, $typeRaw)
    {
        switch ($column) {

            case 'status':
                $type = 'status';
                break;

            case 'role':
                $type = 'role';
                break;

            case 'price':
                $type = 'money';
                break;

            case 'balance':
                $type = 'money';
                break;

            case 'active':
                $type = 'active';
                break;

            case 'is_coming_soon':
                $type = 'is_coming_soon';
                break;

            default:
                $type = 'text';
                break;
        }

        if ($typeRaw == 'crud' && $column == 'content') {
            $type = 'ckeditor';
        } elseif ($column == 'content') {
            $type = 'textarea';
        }

        return $type;
    }

    // Get information field: name, label, type, constraint if can
    public function getField($columnContraints, $value, $type)
    {
        // Get column from table exclude primary key
        $col = array_filter($columnContraints, function ($item) use ($value) {
            return $item->COLUMN_NAME == $value->Field && $item->CONSTRAINT_NAME != 'PRIMARY';
        });

        if (count($col) > 0) {

            $col = array_values($col)[0];

            if ($col->REFERENCED_TABLE_NAME != null) {

                $columnRela = Schema::getColumnListing($col->REFERENCED_TABLE_NAME);
                $nameGeneral = ['title', 'name', 'username'];

                $check = array_values(array_intersect($nameGeneral, $columnRela));

                $table = $this->model->relationships()[$col->REFERENCED_TABLE_NAME]['model'];

                switch ($col->REFERENCED_TABLE_NAME) {
                    case 'media':
                        $typeFinal = 'file';
                        break;

                    default:
                        $typeFinal = $type == 'crud' ? 'select' : 'text_foreign_key';
                        break;
                }

                if ($type == 'search') {
                    $nameFinal = $col->COLUMN_NAME;
                } else {
                    $nameFinal = $type == 'crud' ? $col->COLUMN_NAME : $check[0];
                }

                $data = [
                    'label' => ucfirst(trans()->has('admin.' . $col->REFERENCED_TABLE_NAME) ? trans('admin.' . $col->REFERENCED_TABLE_NAME) : $col->REFERENCED_TABLE_NAME),
                    'name' =>  $nameFinal,
                    'type' => $typeFinal,
                    'data_source' => $type == 'crud' ? $table : $col->REFERENCED_TABLE_NAME,
                    'foreign_key' => $col->COLUMN_NAME,
                    'right' => true,
                    'searchKey' => $check[0],
                ];
            } else {
                $data = [
                    'label' => ucfirst(trans()->has('admin.' . $value->Field) ? trans('admin.' . $value->Field) : $value->Field),
                    'name' => $value->Field,
                    'type' => $this->checkType($value->Field, $type)
                ];
            }
        } else {

            $data = [
                'label' => ucfirst(trans()->has('admin.' . $value->Field) ? trans('admin.' . $value->Field) : $value->Field),
                'name' => $value->Field,
                'type' => $this->checkType($value->Field, $type)
            ];
        }

        return $data;
    }

    // Get list field from db
    // 3 type: crud, index, search
    public function getListFields($type)
    {

        // Get all field in table include constraint
        $columns = DB::select(DB::raw("SHOW COLUMNS FROM " . $this->model->getTable()));
        $columnContraints = DB::select(DB::raw("select COLUMN_NAME, CONSTRAINT_NAME, REFERENCED_COLUMN_NAME, REFERENCED_TABLE_NAME FROM information_schema.KEY_COLUMN_USAGE
        where TABLE_NAME = '" . $this->model->getTable() . "'"));

        $data = [];

        foreach ($columns as $value) {

            // Base notAccept => data
            switch ($type) {

                case 'index':
                    if (!in_array($value->Field, $this->notAcceptedIndex)) {
                        $data[] = $this->getField($columnContraints, $value, $type);
                    }
                    break;

                case 'crud':
                    if (!in_array($value->Field, $this->notAcceptedCreateAndEdit)) {
                        $url = explode('/', $_SERVER['REQUEST_URI']);
                        if (end($url) != 'create') {
                            if (!in_array($value->Field, $this->notAcceptedCreateOnlyEdit)) {
                                $data[] = $this->getField($columnContraints, $value, $type);
                            }
                        } else {
                            $data[] = $this->getField($columnContraints, $value, $type);
                        }
                    }
                    break;

                case 'search':
                    if (!in_array($value->Field, $this->notAcceptedIndex)) {
                        $data[0]['label'] = 'All';
                        $data[0]['name'] = 'all';
                        $data[0]['type'] = 'all';
                        $data[] = $this->getField($columnContraints, $value, $type);
                    }
                    break;
            }
        }

        if (count($columnContraints) - count($this->model->relationships()) != 1) {
            $columnContraints = array_filter(array_map(function ($value) {
                return isset($value->REFERENCED_TABLE_NAME) ? $value->REFERENCED_TABLE_NAME : null;
            }, $columnContraints));

            $extend = array_diff(array_keys($this->model->relationships()), $columnContraints);

            if (count($extend) > 0) {
                foreach ($extend as $value) {

                    $columnRela = Schema::getColumnListing($value);
                    $nameGeneral = ['title', 'name', 'username'];

                    $check = array_values(array_intersect($nameGeneral, $columnRela));

                    if (count($check) > 0) {
                        $data[] = [
                            'label' => ucfirst(trans()->has('admin.' . $value) ? trans('admin.' . $value) : $value),
                            'name' =>  $check[0],
                            'type' => 'text_foreign_key',
                            'data_source' => $value,
                            'foreign_key' => '',
                            'right' => true
                        ];
                    }
                }
            }
        }

        return $data;
    }
}
