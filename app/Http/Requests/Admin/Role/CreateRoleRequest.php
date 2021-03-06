<?php

namespace App\Http\Requests\Admin\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;

class CreateRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $permissionInDB = Permission::pluck('name')->toArray();
        $listPermission = [];
        $allPermission = config('permission.list');

        foreach ($allPermission as $key => $value) {

            foreach ($value as $k => $v) {

                if (!in_array($v, $permissionInDB)) {

                    $listPermission[count($listPermission)]['name'] = $v;
                    $listPermission[count($listPermission) - 1]['guard_name'] = 'admin';
                }
            }
        }

        Permission::insert($listPermission);

        try {

            Artisan::call('cache:forget spatie.permission.cache');
            Artisan::call('cache:clear');

                } catch (\Exception $ex) {

            dd($ex->getMessage());

            Session::flash('error', trans('admin.update_error') . '. Lỗi: ' . $ex->getMessage());
            return redirect()->route('admin.role.index');
        }

        $listPermission = Permission::pluck('name')->toArray();

        return [
            'name' => ['required', 'max: 255'],
            'permission' => ['required', 'array'],
            'permission.*' => ['required', Rule::in($listPermission)]
        ];
    }

    /**
     * Attributes
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name'          => 'Tên nhóm quyền',
            'permission'    => 'Gán quyền',
            'permission.*'  => 'Gán quyền',
        ];
    }
}
