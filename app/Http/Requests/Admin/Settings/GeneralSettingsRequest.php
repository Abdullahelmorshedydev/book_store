<?php

namespace App\Http\Requests\Admin\Settings;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingsRequest extends FormRequest
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
            'site_name_en' => 'required|string|min:3',
            'site_name_ar' => 'required|string|min:3',
            'slogan_en' => 'required|string|min:3',
            'slogan_ar' => 'required|string|min:3',
            'who_we_are_en' => 'required|string',
            'who_we_are_ar' => 'required|string',
            'privacy_policy_en' => 'required|string',
            'privacy_policy_ar' => 'required|string',
            'exchange_and_return_policy_en' => 'required|string',
            'exchange_and_return_policy_ar' => 'required|string',
            'contact_title_en' => 'required|string',
            'contact_title_ar' => 'required|string',
            'contact_content_en' => 'required|string',
            'contact_content_ar' => 'required|string',
            'need_help' => 'required|email',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'site_name_en.required' => __('admin/settings/general/index.required_valid'),
            'site_name_ar.required' => __('admin/settings/general/index.required_valid'),
            'slogan_en.required' => __('admin/settings/general/index.required_valid'),
            'slogan_ar.required' => __('admin/settings/general/index.required_valid'),
            'who_we_are_en.required' => __('admin/settings/general/index.required_valid'),
            'who_we_are_ar.required' => __('admin/settings/general/index.required_valid'),
            'privacy_policy_en.required' => __('admin/settings/general/index.required_valid'),
            'privacy_policy_ar.required' => __('admin/settings/general/index.required_valid'),
            'exchange_and_return_policy_en.required' => __('admin/settings/general/index.required_valid'),
            'exchange_and_return_policy_ar.required' => __('admin/settings/general/index.required_valid'),
            'contact_title_en.required' => __('admin/settings/general/index.required_valid'),
            'contact_title_ar.required' => __('admin/settings/general/index.required_valid'),
            'contact_content_en.required' => __('admin/settings/general/index.required_valid'),
            'contact_content_ar.required' => __('admin/settings/general/index.required_valid'),
            'need_help.required' => __('admin/settings/general/index.required_valid'),
            'email.required' => __('admin/settings/general/index.required_valid'),
            'phone.required' => __('admin/settings/general/index.required_valid'),
            'address.required' => __('admin/settings/general/index.required_valid'),
            'site_name_en.string' => __('admin/settings/general/index.string_valid'),
            'site_name_ar.string' => __('admin/settings/general/index.string_valid'),
            'slogan_en.string' => __('admin/settings/general/index.string_valid'),
            'slogan_ar.string' => __('admin/settings/general/index.string_valid'),
            'who_we_are_en.string' => __('admin/settings/general/index.string_valid'),
            'who_we_are_ar.string' => __('admin/settings/general/index.string_valid'),
            'privacy_policy_en.string' => __('admin/settings/general/index.string_valid'),
            'privacy_policy_ar.string' => __('admin/settings/general/index.string_valid'),
            'exchange_and_return_policy_en.string' => __('admin/settings/general/index.string_valid'),
            'exchange_and_return_policy_ar.string' => __('admin/settings/general/index.string_valid'),
            'contact_title_en.string' => __('admin/settings/general/index.string_valid'),
            'contact_title_ar.string' => __('admin/settings/general/index.string_valid'),
            'contact_content_en.string' => __('admin/settings/general/index.string_valid'),
            'contact_content_ar.string' => __('admin/settings/general/index.string_valid'),
            'need_help.email' => __('admin/settings/general/index.email_valid'),
            'email.email' => __('admin/settings/general/index.email_valid'),
            'phone.numeric' => __('admin/settings/general/index.numeric_valid'),
            'address.string' => __('admin/settings/general/index.string_valid'),
            'site_name_en.min' => __('admin/settings/general/index.min_valid'),
            'site_name_ar.min' => __('admin/settings/general/index.min_valid'),
            'slogan_en.min' => __('admin/settings/general/index.min_valid'),
            'slogan_ar.min' => __('admin/settings/general/index.min_valid'),
        ];
    }
}
