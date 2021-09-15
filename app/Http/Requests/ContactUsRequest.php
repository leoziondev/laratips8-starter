<?php

namespace App\Http\Requests;

use App\Rules\UppercaseRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'first_name' => ['required', 'min:3', 'string' , new UppercaseRule()],
            'first_name' => ['required', 'min:3', 'string'],
            'last_name' => 'required|min:3|string',
            'address' => 'required|array',
            'address.*' => 'required|string|min:3',
        ];
    }

    public function messages()
    {
        return [
            'address.*.required' => 'The address field is required.',
        ];
    }
}
