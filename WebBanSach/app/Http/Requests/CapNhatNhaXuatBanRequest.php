<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatNhaXuatBanRequest extends FormRequest
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
            'ten_nha_xuat_ban'           => 'required|max:100',
            'dia_chi_nha_xuat_ban'       => 'required|max:100',
            'website_nha_xuat_ban'       => 'required|max:100',
            'email_nha_xuat_ban'         => 'required|max:100|email',
            'so_dien_thoai_nha_xuat_ban' => 'required|digits_between:8,11|numeric'
        ];
    }

    public function messages()
    {
        return [
            'ten_nha_xuat_ban.required'                   => 'Vui Lòng Nhập Tên Nhà Xuất Bản',
            'ten_nha_xuat_ban.max'                        => 'Tên Nhà Xuất Bản Chỉ Nhiều Nhất 100 Ký Tự',

            'dia_chi_nha_xuat_ban.required'               => 'Vui Lòng Nhập Địa Chỉ Nhà Xuất Bản',
            'dia_chi_nha_xuat_ban.max'                    => 'Địa Chỉ Nhà Xuất Bản Chỉ Nhiều Nhất 100 Ký Tự',

            'website_nha_xuat_ban.required'               => 'Vui Lòng Nhập Website Nhà Xuất Bản',
            'website_nha_xuat_ban.max'                    => 'Website Nhà Xuất Bản Chỉ Nhiều Nhất 100 Ký Tự',

            'email_nha_xuat_ban.required'                 => 'Vui Lòng Nhập Email Nhà Xuất Bản',
            'email_nha_xuat_ban.max'                      => 'Email Nhà Xuất Bản Chỉ Nhiều Nhất 100 Ký Tự',
            'email_nha_xuat_ban.email'                    => 'Email Nhà Xuất Bản Phải Điền Đúng Định Dạng',

            'so_dien_thoai_nha_xuat_ban.required'         => 'Vui Lòng Nhập Số Điện Thoại Nhà Xuất Bản',
            'so_dien_thoai_nha_xuat_ban.digits_between'   => 'Số Điện Thoại Nhà Xuất Bản Nằm Trong Khoảng 8 Đến 11 Ký Tự',
            'so_dien_thoai_nha_xuat_ban.numeric'          => 'Số Điện Thoại Nhà Xuất Bản Phải Là Số Nguyên'
        ];
    }
}
