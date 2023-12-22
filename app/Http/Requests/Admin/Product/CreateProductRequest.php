<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'author' => ['required'],
            'price' => ['required'],
            'quantity' => ['required'],
            'pages' => ['required'],
            'offer_price' => ['nullable'],
            'image' => ['required', 'image', 'mimetypes:image/png,image/jpg,image/jpeg', 'mimes:png,jpg,jpeg'],
        ];
    }

    public function messages()
    {
        return [
            'name_en.required' => __('admin/product/create.name_en_valid_required'),
            'name_en.string' => __('admin/product/create.name_en_valid_string'),
            'name_en.unique' => __('admin/product/create.name_en_valid_uinque'),
            'name_en.min' => __('admin/product/create.name_en_valid_min'),
            'name_en.max' => __('admin/product/create.name_en_valid_max'),
            'name_ar.required' => __('admin/product/create.name_ar_valid_required'),
            'name_ar.string' => __('admin/product/create.name_ar_valid_string'),
            'name_ar.unique' => __('admin/product/create.name_ar_valid_uinque'),
            'name_ar.min' => __('admin/product/create.name_ar_valid_min'),
            'name_ar.max' => __('admin/product/create.name_ar_valid_max'),
            'image.required' => __('admin/product/create.image_valid_required'),
            'image.image' => __('admin/product/create.image_valid_image'),
            'image.mimetype' => __('admin/product/create.image_valid_mimetype'),
            'image.mimes' => __('admin/product/create.image_valid_mimes'),
            'author.required' => __('admin/product/create.author_valid_required'),
            'pages.required' => __('admin/product/create.pages_valid_required'),
            'quantity.required' => __('admin/product/create.quantity_valid_required'),
            'price.required' => __('admin/product/create.price_valid_required'),
        ];
    }
}
