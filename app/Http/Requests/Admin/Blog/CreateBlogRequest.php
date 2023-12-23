<?php

namespace App\Http\Requests\Admin\Blog;

use App\Models\Blog;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateBlogRequest extends FormRequest
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
            'title_en' => ['required', 'string', 'unique:blogs,title'],
            'title_ar' => ['required', 'string', 'unique:blogs,title'],
            'article_en' => ['required'],
            'article_ar' => ['required'],
            'image' => ['image', 'mimetypes:image/png,image/jpg,image/jpeg', 'mimes:png,jpg,jpeg'],
        ];
    }

    public function messages()
    {
        return [
            'title_en.required' => __('admin/blog/create.title_en_valid_required'),
            'title_en.string' => __('admin/blog/create.title_en_valid_string'),
            'title_en.unique' => __('admin/blog/create.title_en_valid_uinque'),
            'title_ar.required' => __('admin/blog/create.title_ar_valid_required'),
            'title_ar.string' => __('admin/blog/create.title_ar_valid_string'),
            'title_ar.unique' => __('admin/blog/create.title_ar_valid_uinque'),
            'article_en.required' => __('admin/blog/create.article_en_valid_required'),
            'article_ar.required' => __('admin/blog/create.article_ar_valid_required'),
            'image.image' => __('admin/blog/create.image_valid_image'),
            'image.mimetype' => __('admin/blog/create.image_valid_mimetype'),
            'image.mimes' => __('admin/blog/create.image_valid_mimes'),
        ];
    }
}
