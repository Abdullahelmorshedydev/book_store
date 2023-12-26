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
            'site_goals' => 'nullable|image|mimes:png,jpg,jpeg|mimetypes:image/png,image/jpg,image/jpeg',
            'shipping_slogan' => 'nullable|image|mimes:png,jpg,jpeg|mimetypes:image/png,image/jpg,image/jpeg',
            'quality_assurance' => 'nullable|image|mimes:png,jpg,jpeg|mimetypes:image/png,image/jpg,image/jpeg',
            'technical_support' => 'nullable|image|mimes:png,jpg,jpeg|mimetypes:image/png,image/jpg,image/jpeg',
            'easy_exchange' => 'nullable|image|mimes:png,jpg,jpeg|mimetypes:image/png,image/jpg,image/jpeg',
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
            'site_goals.image' => __('admin/settings/files/index.image_valid'),
            'site_goals.mimes' => __('admin/settings/files/index.mimes_valid'),
            'site_goals.mimetype' => __('admin/settings/files/index.mimetype_valid'),
            'shipping_slogan.image' => __('admin/settings/files/index.image_valid'),
            'shipping_slogan.mimes' => __('admin/settings/files/index.mimes_valid'),
            'shipping_slogan.mimetype' => __('admin/settings/files/index.mimetype_valid'),
            'quality_assurance.image' => __('admin/settings/files/index.image_valid'),
            'quality_assurance.mimes' => __('admin/settings/files/index.mimes_valid'),
            'quality_assurance.mimetype' => __('admin/settings/files/index.mimetype_valid'),
            'technical_support.image' => __('admin/settings/files/index.image_valid'),
            'technical_support.mimes' => __('admin/settings/files/index.mimes_valid'),
            'technical_support.mimetype' => __('admin/settings/files/index.mimetype_valid'),
            'easy_exchange.image' => __('admin/settings/files/index.image_valid'),
            'easy_exchange.mimes' => __('admin/settings/files/index.mimes_valid'),
            'easy_exchange.mimetype' => __('admin/settings/files/index.mimetype_valid'),
        ];
    }
}
