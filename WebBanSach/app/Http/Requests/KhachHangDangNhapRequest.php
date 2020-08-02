<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhachHangDangNhapRequest extends FormRequest
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
            'ten_tai_khoan' => 'required|min:6|max:24',
            'mat_khau'      => 'required|min:6|max:32'
        ];
    }

    public function messages()
    {
        return [
            'ten_tai_khoan.required' => 'Vui Lòng Nhập Tên Tài Khoản',
            'ten_tai_khoan.min'      => 'Tên Tài Khoản Phải Ít Nhất 6 Ký Tự',
            'ten_tai_khoan.max'      => 'Tên Tài Khoản Chỉ Nhiều Nhất 24 Ký Tự',

            'mat_khau.required'      => 'Vui Lòng Nhập Mật Khẩu',
            'mat_khau.min'           => 'Mật Khẩu Phải Ít Nhất 6 Ký Tự',
            'mat_khau.max'           => 'Mật Khẩu Chỉ Nhiều Nhất 32 Ký Tự'
        ];
    }
}
