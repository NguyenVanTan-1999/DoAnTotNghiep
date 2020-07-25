<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemMoiNhaXuatBanRequest extends FormRequest
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
            'ma_nha_xuat_ban'            => 'required|min:6|max:10|unique:nha_xuat_ban,ma_nha_xuat_ban',
            'ten_nha_xuat_ban'           => 'required|max:40|unique:nha_xuat_ban,ten_nha_xuat_ban',
            'dia_chi_nha_xuat_ban'       => 'required|max:100|unique:nha_xuat_ban,dia_chi_nha_xuat_ban',
            'website_nha_xuat_ban'       => 'required|max:40|url|unique:nha_xuat_ban,website_nha_xuat_ban',
            'email_nha_xuat_ban'         => 'required|max:40|email|unique:nha_xuat_ban,email_nha_xuat_ban',
            'so_dien_thoai_nha_xuat_ban' => 'required|digits_between:8,11|numeric|unique:nha_xuat_ban,so_dien_thoai_nha_xuat_ban'
        ];
    }

    public function messages()
    {
        return [
            'ma_nha_xuat_ban.required'                    => 'Vui Lòng Nhập Mã Nhà Xuất Bản',
            'ma_nha_xuat_ban.min'                         => 'Mã Nhà Xuất Bản Phải Ít Nhất 6 Ký Tự',
            'ma_nha_xuat_ban.max'                         => 'Mã Nhà Xuất Bản Chỉ Nhiều Nhất 10 Ký Tự',
            'ma_nha_xuat_ban.unique'                      => 'Mã Nhà Xuất Bản Đã Bị Trùng',

            'ten_nha_xuat_ban.required'                   => 'Vui Lòng Nhập Tên Nhà Xuất Bản',
            'ten_nha_xuat_ban.max'                        => 'Tên Nhà Xuất Bản Chỉ Nhiều Nhất 40 Ký Tự',
            'ten_nha_xuat_ban.unique'                     => 'Tên Nhà Xuất Bản Đã Bị Trùng',

            'dia_chi_nha_xuat_ban.required'               => 'Vui Lòng Nhập Địa Chỉ Nhà Xuất Bản',
            'dia_chi_nha_xuat_ban.max'                    => 'Địa Chỉ Nhà Xuất Bản Chỉ Nhiều Nhất 100 Ký Tự',
            'dia_chi_nha_xuat_ban.unique'                 => 'Địa Chỉ Nhà Xuất Bản Đã Bị Trùng',

            'website_nha_xuat_ban.required'               => 'Vui Lòng Nhập Website Nhà Xuất Bản',
            'website_nha_xuat_ban.max'                    => 'Website Nhà Xuất Bản Chỉ Nhiều Nhất 40 Ký Tự',
            'website_nha_xuat_ban.url'                    => 'Website Nhà Xuất Bản Phải Điền Đúng Định Dạng',
            'website_nha_xuat_ban.unique'                 => 'Website Nhà Xuất Bản Đã Bị Trùng',

            'email_nha_xuat_ban.required'                 => 'Vui Lòng Nhập Email Nhà Xuất Bản',
            'email_nha_xuat_ban.max'                      => 'Email Nhà Xuất Bản Chỉ Nhiều Nhất 40 Ký Tự',
            'email_nha_xuat_ban.email'                    => 'Email Nhà Xuất Bản Phải Điền Đúng Định Dạng',
            'email_nha_xuat_ban.unique'                   => 'Email Nhà Xuất Bản Đã Bị Trùng',

            'so_dien_thoai_nha_xuat_ban.required'         => 'Vui Lòng Nhập Số Điện Thoại Nhà Xuất Bản',
            'so_dien_thoai_nha_xuat_ban.digits_between'   => 'Số Điện Thoại Nhà Xuất Bản Nằm Trong Khoảng 8 Đến 11 Số',
            'so_dien_thoai_nha_xuat_ban.numeric'          => 'Số Điện Thoại Nhà Xuất Bản Phải Là Số Nguyên',
            'so_dien_thoai_nha_xuat_ban.unique'           => 'Số Điện Thoại Nhà Xuất Bản Đã Bị Trùng'
        ];
    }
}
