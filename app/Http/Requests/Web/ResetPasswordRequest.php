<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'current_pass' => 'required',
            'new_pass' => 'required|confirmed',
            'new_pass_confirmation' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'current_pass.required' => __('admin/auth/reset.password_valid_required'),
            'new_pass.required' => __('admin/auth/reset.password_valid_required'),
            'new_pass_confirmation.required' => __('admin/auth/register.password_confirmation_valid_required'),
            'new_pass.confirmed' => __('admin/auth/register.password_valid_confirmed'),
        ];
    }
}
