<?php

namespace App\Http\Requests\Admin\Blog;

use App\Models\Blog;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
        $status = Blog::$status;
        return [
            'title' => ['required', 'string', 'unique:blogs,title'.$this->id],
            'article' => ['required'],
            'status' => [Rule::in($status)],
            'image' => ['image', 'mimetypes:image/png,image/jpg,image/jpeg', 'mimes:png,jpg,jpeg'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => __('admin/blog/edit.title_valid_required'),
            'title.string' => __('admin/blog/edit.title_valid_string'),
            'title.unique' => __('admin/blog/edit.title_valid_uinque'),
            'article.required' => __('admin/blog/edit.article_valid_required'),
            'status.rule' => __('admin/blog/edit.status_valid_rule'),
            'image.image' => __('admin/blog/edit.image_valid_image'),
            'image.mimetype' => __('admin/blog/edit.image_valid_mimetype'),
            'image.mimes' => __('admin/blog/edit.image_valid_mimes'),
        ];
    }
}
