<?php

namespace App\Http\Requests\Admin\Branch;

use Exception;
use App\Models\Branch;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateBranchRequest extends FormRequest
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
        $status = Branch::$status;
        return [
            'name' => ['required', 'string', 'unique:branches,name' . $this->id],
            'address' => ['required', 'string'],
            'status' => [Rule::in($status)],
        ];
    }

    public function messages()
    {
        return [
            'name_en.required' => __('admin/branch/create.name_en_valid_required'),
            'name_en.string' => __('admin/branch/create.name_en_valid_string'),
            'name_en.unique' => __('admin/branch/create.name_en_valid_unique'),
            'name_ar.required' => __('admin/branch/create.name_ar_valid_required'),
            'name_ar.string' => __('admin/branch/create.name_ar_valid_string'),
            'name_ar.unique' => __('admin/branch/create.name_ar_valid_unique'),
            'address_en.required' => __('admin/branch/create.address_en_valid_required'),
            'address_en.string' => __('admin/branch/create.address_en_valid_string'),
            'address_ar.required' => __('admin/branch/create.address_ar_valid_required'),
            'address_ar.string' => __('admin/branch/create.address_ar_valid_string'),
            'status.rule' => __('admin/branch/edit.status_valid_rule'),
        ];
    }
}
