<?php

namespace App\Http\Requests\Admin\Auth;

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
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => __('admin/auth/reset.email_valid_required'),
            'email.email' => __('admin/auth/reset.email_valid_email'),
            'email.exists' => __('admin/auth/reset.email_valid_exists'),
            'password.required' => __('admin/auth/reset.password_valid_required'),
            'password.confirmed' => __('admin/auth/reset.password_valid_confirmed'),
            'password_confirmation.required' => __('admin/auth/reset.password_confirmation_valid_required'),
        ];
    }
}
