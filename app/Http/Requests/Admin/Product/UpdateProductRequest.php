<?php

namespace App\Http\Requests\Admin\Product;

use App\Models\Product;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
        $status = Product::$status;
        return [
            'name' => ['required', 'string', 'unique:categories,name'.$this->id, 'min:3', 'max:50'],
            'author' => ['required'],
            'price' => ['required'],
            'quantity' => ['required'],
            'pages' => ['required'],
            'offer_price' => ['nullable'],
            'status' => [Rule::in($status)],
            'image' => ['image', 'mimetypes:image/png,image/jpg,image/jpeg', 'mimes:png,jpg,jpeg'],
            'description' => ['required'],
            'category' => ['required', 'exists:categories,id'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('admin/product/edit.name_valid_required'),
            'name.string' => __('admin/product/edit.name_valid_string'),
            'name.unique' => __('admin/product/edit.name_valid_uinque'),
            'name.min' => __('admin/product/edit.name_valid_min'),
            'name.max' => __('admin/product/edit.name_valid_max'),
            'image.image' => __('admin/product/edit.image_valid_image'),
            'image.mimetype' => __('admin/product/edit.image_valid_mimetype'),
            'image.mimes' => __('admin/product/edit.image_valid_mimes'),
            'author.required' => __('admin/product/edit.author_valid_required'),
            'pages.required' => __('admin/product/edit.pages_valid_required'),
            'quantity.required' => __('admin/product/edit.quantity_valid_required'),
            'price.required' => __('admin/product/edit.price_valid_required'),
            'description.required' => __('admin/product/create.description_valid_required'),
            'category_id.required' => __('admin/product/create.category_id_valid_required'),
            'category_id.exists' => __('admin/product/create.category_id_valid_exists'),
        ];
    }
}
