<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class KhachHangTaoHoaDonRequest extends FormRequest
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
            'ten_nguoi_nhan'          => 'required|max:40',
            'dia_chi_giao_hang'       => 'required|max:100',
            'so_dien_thoai_giao_hang' => 'required|digits:10|numeric'
        ];
    }

    public function messages()
    {
        return [
            'ten_nguoi_nhan.required'            => 'Vui Lòng Nhập Tên Người Nhận',
            'ten_nguoi_nhan.max'                 => 'Tên Người Nhận Chỉ Nhiều Nhất 40 Ký Tự',

            'dia_chi_giao_hang.required'         => 'Vui Lòng Nhập Địa Chỉ Giao Hàng',
            'dia_chi_giao_hang.max'              => 'Địa Chỉ Giao Hàng Chỉ Nhiều Nhất 100 Ký Tự',

            'so_dien_thoai_giao_hang.required'   => 'Vui Lòng Nhập Số Điện Thoại Giao Hàng',
            'so_dien_thoai_giao_hang.digits'     => 'Số Điện Thoại Giao Hàng Phải Điền Đúng 10 Số',
            'so_dien_thoai_giao_hang.numeric'    => 'Số Điện Thoại Giao Hàng Phải Là Số Nguyên'
        ];
    }
}
