<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemMoiLoaiSanPhamRequest extends FormRequest
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
            'ma_loai_san_pham'  => 'required|max:10|unique:loai_san_pham,ma_loai_san_pham',
            'ten_loai_san_pham' => 'required|max:100|unique:loai_san_pham,ten_loai_san_pham'
        ];
    }

    public function messages()
    {
        return [
            'ma_loai_san_pham.required'   => 'Vui Lòng Nhập Mã Loại Sản Phẩm',
            'ma_loai_san_pham.max'        => 'Mã Loại Sản Phẩm Chỉ Nhiều Nhất 10 Ký Tự',
            'ma_loai_san_pham.unique'     => 'Mã Loại Sản Phẩm Đã Bị Trùng',

            'ten_loai_san_pham.required'  => 'Vui Lòng Nhập Tên Loại Sản Phẩm',
            'ten_loai_san_pham.max'       => 'Tên Loại Sản Phẩm Chỉ Nhiều Nhất 100 Ký Tự',
            'ten_loai_san_pham.unique'    => 'Tên Loại Sản Phẩm Đã Bị Trùng'
        ];
    }
}
