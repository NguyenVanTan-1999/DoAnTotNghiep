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
            'ten_nha_xuat_ban'           => 'required',
            'dia_chi_nha_xuat_ban'       => 'required',
            'website_nha_xuat_ban'       => 'required',
            'email_nha_xuat_ban'         => 'required',
            'so_dien_thoai_nha_xuat_ban' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'ten_nha_xuat_ban.required'            => 'Vui Lòng Nhập Tên Nhà Xuất Bản',

            'dia_chi_nha_xuat_ban.required'        => 'Vui Lòng Nhập Địa Chỉ Nhà Xuất Bản',

            'website_nha_xuat_ban.required'        => 'Vui Lòng Nhập Website Nhà Xuất Bản',

            'email_nha_xuat_ban.required'          => 'Vui Lòng Nhập Email Nhà Xuất Bản',

            'so_dien_thoai_nha_xuat_ban.required'  => 'Vui Lòng Nhập Số Điện Thoại Nhà Xuất Bản'
        ];
    }
}
