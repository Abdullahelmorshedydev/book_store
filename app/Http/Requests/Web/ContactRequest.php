<?php

namespace App\Http\Requests\Web;

use App\Models\Contact;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
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
        if(app()->currentLocale() == 'ar') {
            $reason = Contact::$reason_ar;
        } elseif (app()->currentLocale() == 'en') {
            $reason = Contact::$reason_en;
        }
        return [
            'name' => 'required|string|min:3',
            'phone' => 'required',
            'email' => 'required|email',
            'reason' => 'required|' . Rule::in($reason),
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('web/contact.required_valid'),
            'phone.required' => __('web/contact.required_valid'),
            'email.required' => __('web/contact.required_valid'),
            'reason.required' => __('web/contact.required_valid'),
            'message.required' => __('web/contact.required_valid'),
            'name.string' => __('web/contact.string_valid'),
            'name.min' => __('web/contact.min_valid'),
            'email.email' => __('web/contact.email_valid'),
            'reason.rule' => __('web/contact.rule_valie'),
        ];
    }
}
