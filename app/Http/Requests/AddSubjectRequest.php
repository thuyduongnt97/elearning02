<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSubjectRequest extends FormRequest
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
            'name' => 'required|unique:subjects|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('message.name.required'),
            'name.unique' => __('message.name.unique'),
            'name.max' => __('message.name.max'),
        ];
    }
}
