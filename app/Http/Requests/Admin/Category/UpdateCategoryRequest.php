<?php

namespace App\Http\Requests\Admin\Category;

use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
        $status = Category::$status;
        return [
            'name' => ['required', 'string', 'unique:categories,name' . $this->id, 'min:3', 'max:50'],
            'image' => ['image', 'mimetypes:image/png,image/jpg,image/jpeg', 'mimes:png,jpg,jpeg'],
            'status' => [Rule::in($status)],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('admin/category/edit.name_valid_required'),
            'name.string' => __('admin/category/edit.name_valid_string'),
            'name.unique' => __('admin/category/edit.name_valid_uinque'),
            'name.min' => __('admin/category/edit.name_valid_min'),
            'name.max' => __('admin/category/edit.name_valid_max'),
            'image.image' => __('admin/category/edit.image_valid_image'),
            'image.mimetype' => __('admin/category/edit.image_valid_mimetype'),
            'image.mimes' => __('admin/category/edit.image_valid_mimes'),
            'status.rule' => __('admin/category/edit.status_valid_rule'),
        ];
    }
}
