<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'blog_title' => 'required|max:255|min:5',
            'blog_content' => 'required',
            // 'created_at' => 'date_format:Y/m/d|after:yesterday'
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'blog_title.required' => 'Blog tiltle không được trống!',
    //         'blog_title.max' => 'Blog tiltle Không được quá 255 ký tự!',
    //         'blog_title.min' => 'Blog tiltle không được ít hơn 5 ký tự!',
    //         'blog_content.required' => 'content_input không được trống',
    //     ];
    // }
}
