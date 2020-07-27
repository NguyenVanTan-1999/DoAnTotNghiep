<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatQuanTriVienRequest extends FormRequest
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
            'ho_ten_admin'  => 'required|max:40'
        ];
    }

    public function messages()
    {
        return [
            'ho_ten_admin.required'                     => 'Vui Lòng Nhập Họ Tên Admin',
            'ho_ten_admin.max'                          => 'Họ Tên Admin Chỉ Nhiều Nhất 40 Ký Tự'
        ];
    }
}
