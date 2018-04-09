<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogUser extends FormRequest
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
            'name' => 'required|max:255',
            'full_name' => 'required',
            // 'category_id'   => 'required',
            // 'slug' => 'required|unique:posts',
            'email' => 'required',
            'password' => 'required'

            
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Không được để rỗng name!',
            'name.max' => 'Name ngắn hơn 255 ký tự! ',
            'full_name.required' => 'Không được để trống!',
            'email' => 'Không được để trống!',
            // 'slug.required' => 'Cần đường dẫn',
            // 'slug.unique' => 'Đường dẫn đã có :((',
            'password.required' => 'Yêu cầu nhập password!'
        ];
    }
}
