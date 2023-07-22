<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "reg_id" => "required|max:50|unique:students,reg_id,string,id",
            "nic" => "required|max:20|unique:students,nic,string,id",
            "name" => "required|max:200",
            "email" => "required|max:200|email",
            "address" => "nullable",
            "msisdn" => "required|max:11",
            "course_id" => "required|numeric",
            "is_login" => "required|numeric"
        ];
    }
}
