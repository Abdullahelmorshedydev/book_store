<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'cart_id' => 'required',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required|string',
            'notes' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => __('web/contact.required_valid'),
            'first_name.string' => __('web/contact.string_valid'),
            'last_name.required' => __('web/contact.required_valid'),
            'last_name.string' => __('web/contact.string_valid'),
            'email.required' => __('web/contact.required_valid'),
            'email.email' => __('web/contact.email_valid'),
            'address.required' => __('web/contact.required_valid'),
            'address.string' => __('web/contact.string_valid'),
            'phone.required' => __('web/contact.required_valid'),
        ];
    }
}
