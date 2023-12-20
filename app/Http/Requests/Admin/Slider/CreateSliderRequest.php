<?php

namespace App\Http\Requests\Admin\Slider;

use Illuminate\Foundation\Http\FormRequest;

class CreateSliderRequest extends FormRequest
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
            'image' => ['required', 'image', 'mimetypes:image/png,image/jpg,image/jpeg', 'mimes:png,jpg,jpeg'],
        ];
    }
    
    public function messages()
    {
        return [
            'image.required' => __('admin/slider/create.image_valid_required'),
            'image.image' => __('admin/slider/create.image_valid_image'),
            'image.mimetype' => __('admin/slider/create.image_valid_mimetype'),
            'image.mimes' => __('admin/slider/create.image_valid_mimes'),
        ];
    }
}
