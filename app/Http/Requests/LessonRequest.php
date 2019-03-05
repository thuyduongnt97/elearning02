<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
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
            'title' => 'required',
            'subject' => 'required',
            'file' => 'max:60000',
            'content',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => __('message.title.required'),
            'file.required' => __('message.file.required'),
            'subject_id.required' => __('message.subject.required'),
        ];
    }
}
