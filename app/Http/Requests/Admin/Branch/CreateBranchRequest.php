<?php

namespace App\Http\Requests\Admin\Branch;

use Illuminate\Foundation\Http\FormRequest;

class CreateBranchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_en' => ['required', 'string', 'unique:branches,name'],
            'name_ar' => ['required', 'string', 'unique:branches,name'],
            'address_en' => ['required', 'string'],
            'address_ar' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'name_en.required' => __('admin/branch/create.name_en_valid_required'),
            'name_en.string' => __('admin/branch/create.name_en_valid_string'),
            'name_en.unique' => __('admin/branch/create.name_en_valid_unique'),
            'name_ar.required' => __('admin/branch/create.name_ar_valid_required'),
            'name_ar.string' => __('admin/branch/create.name_ar_valid_string'),
            'name_ar.unique' => __('admin/branch/create.name_ar_valid_unique'),
            'address_en.required' => __('admin/branch/create.address_en_valid_required'),
            'address_en.string' => __('admin/branch/create.address_en_valid_string'),
            'address_ar.required' => __('admin/branch/create.address_ar_valid_required'),
            'address_ar.string' => __('admin/branch/create.address_ar_valid_string'),
        ];
    }
}
