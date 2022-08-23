<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name'     => 'required|max:255',
            'email'    => 'required|email',
            'whatsapp' => ['required', 'regex:/^(\+62|62|0)8[1-9][0-9]{6,9}$/'],
            'city'     => 'required',
            'message'  => 'required'
        ];
    }
}
