<?php

namespace App\Http\Requests\Admin\Settings;

use Illuminate\Foundation\Http\FormRequest;

class LinksSettingsRequest extends FormRequest
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
            'facebook_link' => 'nullable',
            'instgram_link' => 'nullable',
            'x_link' => 'nullable',
            'youtube_link' => 'nullable',
            'tiktok_link' => 'nullable',
            'threads_link' => 'nullable',
        ];
    }
}
