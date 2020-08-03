<?php

namespace App\Http\Requests\Admin\TaiKhoan;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatTaiKhoanRequest extends FormRequest
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
            'ho_ten'                   => 'required|max:40',
            'do_tuoi'                  => 'required|digits_between:2,3|numeric',
            'gioi_tinh'                => 'required',
            'dia_chi'                  => 'required|max:100',
            'quoc_gia'                 => 'required',
            'email'                    => 'required|max:40|email|unique:tai_khoan,email,'.$this->id,
            'so_dien_thoai'            => 'required|digits:10|numeric|unique:tai_khoan,so_dien_thoai,'.$this->id
        ];
    }

    public function messages()
    {
        return [
            'ho_ten.required'                     => 'Vui Lòng Nhập Họ Tên',
            'ho_ten.max'                          => 'Họ Tên Chỉ Nhiều Nhất 40 Ký Tự',

            'do_tuoi.required'                    => 'Vui Lòng Nhập Độ Tuổi',
            'do_tuoi.digits_between'              => 'Độ Tuổi Nằm Trong Khoảng 10 Tuổi Đến 100 Tuổi',
            'do_tuoi.numeric'                     => 'Độ Tuổi Phải Là Số Nguyên',

            'gioi_tinh.required'                  => 'Vui Lòng Chọn Giới Tính',

            'dia_chi.required'                    => 'Vui Lòng Nhập Địa Chỉ',
            'dia_chi.max'                         => 'Địa Chỉ Chỉ Nhiều Nhất 100 Ký Tự',

            'quoc_gia.required'                   => 'Vui Lòng Chọn Quốc Gia',

            'email.required'                      => 'Vui Lòng Nhập Email',
            'email.max'                           => 'Email Chỉ Nhiều Nhất 40 Ký Tự',
            'email.email'                         => 'Email Phải Điền Đúng Định Dạng',
            'email.unique'                        => 'Email Đã Bị Trùng',

            'so_dien_thoai.required'              => 'Vui Lòng Nhập Số Điện Thoại',
            'so_dien_thoai.digits'                => 'Số Điện Thoại Phải Điền Đúng 10 Số',
            'so_dien_thoai.numeric'               => 'Số Điện Thoại Phải Là Số Nguyên',
            'so_dien_thoai.unique'                => 'Số Điện Thoại Đã Bị Trùng'
        ];
    }
}
