<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
            'name_en' => ['required', 'string', 'unique:categories,name', 'min:3', 'max:50'],
            'name_ar' => ['required', 'string', 'unique:categories,name', 'min:3', 'max:50'],
            'image' => ['required', 'image', 'mimetypes:image/png,image/jpg,image/jpeg', 'mimes:png,jpg,jpeg'],
        ];
    }

    public function messages()
    {
        return [
            'name_en.required' => __('admin/category/create.name_en_valid_required'),
            'name_en.string' => __('admin/category/create.name_en_valid_string'),
            'name_en.unique' => __('admin/category/create.name_en_valid_uinque'),
            'name_en.min' => __('admin/category/create.name_en_valid_min'),
            'name_en.max' => __('admin/category/create.name_en_valid_max'),
            'name_ar.required' => __('admin/category/create.name_ar_valid_required'),
            'name_ar.string' => __('admin/category/create.name_ar_valid_string'),
            'name_ar.unique' => __('admin/category/create.name_ar_valid_uinque'),
            'name_ar.min' => __('admin/category/create.name_ar_valid_min'),
            'name_ar.max' => __('admin/category/create.name_ar_valid_max'),
            'image.required' => __('admin/category/create.image_valid_required'),
            'image.image' => __('admin/category/create.image_valid_image'),
            'image.mimetype' => __('admin/category/create.image_valid_mimetype'),
            'image.mimes' => __('admin/category/create.image_valid_mimes'),
        ];
    }
}
