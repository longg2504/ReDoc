<?php

namespace App\Http\Requests\Admin\Settings;

use App\Models\Settings;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSettingRequest extends FormRequest
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
    public function rules($id)
    {
        return [
            'setting_key' => ['required', Rule::unique('settings')->ignore($id)],
            'setting_value' => 'required',
            'type' => ['required', Rule::in(Settings::INPUT_TEXT, Settings::INPUT_TEXTAREA, Settings::INPUT_MEDIA)]
        ];
    }

    /**
     * Attributes
     *
     * @return array
     */
    public function attributes()
    {
        return [];
    }
}
