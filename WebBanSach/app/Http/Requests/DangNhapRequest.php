<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangNhapRequest extends FormRequest
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
            'ten_tai_khoan_admin' => 'required',
            'mat_khau_admin'      => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'ten_tai_khoan_admin.required' => 'Vui Lòng Nhập Tên Tài Khoản Admin',
            'mat_khau_admin.required'      => 'Vui Lòng Nhập Mật Khẩu Admin',
            'mat_khau_admin.min'           => 'Mật Khẩu Admin phải ít nhất 6 ký tự'
        ];
    }
}
