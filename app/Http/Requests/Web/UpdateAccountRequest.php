<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccountRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('admin/auth/register.name_valid_required'),
            'name.string' => __('admin/auth/register.name_valid_string'),
            'email.email' => __('admin/auth/register.email_valid_email'),
            'email.required' => __('admin/auth/register.email_valid_required'),
            'email.unique' => __('admin/auth/register.email_valid_unique'),
        ];
    }
}
