<?php

namespace App\Http\Requests\Admin;

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
            'ten_tai_khoan_admin' => 'required|min:5|max:24',
            'mat_khau_admin'      => 'required|min:6|max:32'
        ];
    }

    public function messages()
    {
        return [
            'ten_tai_khoan_admin.required' => 'Vui Lòng Nhập Tên Tài Khoản Admin',
            'ten_tai_khoan_admin.min'      => 'Tên Tài Khoản Admin Phải Ít Nhất 5 Ký Tự',
            'ten_tai_khoan_admin.max'      => 'Tên Tài Khoản Admin Chỉ Nhiều Nhất 24 Ký Tự',

            'mat_khau_admin.required'      => 'Vui Lòng Nhập Mật Khẩu Admin',
            'mat_khau_admin.min'           => 'Mật Khẩu Admin Phải Ít Nhất 6 Ký Tự',
            'mat_khau_admin.max'           => 'Mật Khẩu Admin Chỉ Nhiều Nhất 32 Ký Tự'
        ];
    }
}
