<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class fileUploadRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'user_id' => 'required',
            'file' => 'mimes:png,jpg,jpeg,svg,pdf|max:3024',
            'post' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title is required!',
            'post.required' => 'Message is required'
        ];
    }
}
