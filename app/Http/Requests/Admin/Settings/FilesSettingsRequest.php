<?php

namespace App\Http\Requests\Admin\Settings;

use Illuminate\Foundation\Http\FormRequest;

class FilesSettingsRequest extends FormRequest
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
            'site_logo' => 'nullable|image|mimes:png,jpg,jpeg|mimetypes:image/png,image/jpg,image/jpeg',
            'favicon' => 'nullable|image|mimes:png,jpg,jpeg|mimetypes:image/png,image/jpg,image/jpeg',
            'contact' => 'nullable|image|mimes:png,jpg,jpeg|mimetypes:image/png,image/jpg,image/jpeg',
            'header_banner' => 'nullable|image|mimes:png,jpg,jpeg|mimetypes:image/png,image/jpg,image/jpeg',
        ];
    }

    public function messages()
    {
        return [
            'site_logo.image' => __('admin/settings/files/index.image_valid'),
            'site_logo.mimes' => __('admin/settings/files/index.mimes_valid'),
            'site_logo.mimetype' => __('admin/settings/files/index.mimetype_valid'),
            'favicon.image' => __('admin/settings/files/index.image_valid'),
            'favicon.mimes' => __('admin/settings/files/index.mimes_valid'),
            'favicon.mimetype' => __('admin/settings/files/index.mimetype_valid'),
            'contact.image' => __('admin/settings/files/index.image_valid'),
            'contact.mimes' => __('admin/settings/files/index.mimes_valid'),
            'contact.mimetype' => __('admin/settings/files/index.mimetype_valid'),
            'header_banner.image' => __('admin/settings/files/index.image_valid'),
            'header_banner.mimes' => __('admin/settings/files/index.mimes_valid'),
            'header_banner.mimetype' => __('admin/settings/files/index.mimetype_valid'),
        ];
    }
}
