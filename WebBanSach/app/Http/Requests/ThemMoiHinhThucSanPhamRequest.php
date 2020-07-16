<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemMoiHinhThucSanPhamRequest extends FormRequest
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
            'loai_hinh_thuc_san_pham'  => 'required|max:10|unique:hinh_thuc_san_pham,loai_hinh_thuc_san_pham',
            'ten_hinh_thuc_san_pham'   => 'required|max:100|unique:hinh_thuc_san_pham,ten_hinh_thuc_san_pham'
        ];
    }

    public function messages()
    {
        return [
            'loai_hinh_thuc_san_pham.required'   => 'Vui Lòng Nhập Loại Hình Thức Sản Phẩm',
            'loai_hinh_thuc_san_pham.max'        => 'Loại Hình Thức Sản Phẩm Chỉ Nhiều Nhất 10 Ký Tự',
            'loai_hinh_thuc_san_pham.unique'     => 'Loại Hình Thức Sản Phẩm Đã Bị Trùng',

            'ten_hinh_thuc_san_pham.required'    => 'Vui Lòng Nhập Tên Hình Thức Sản Phẩm',
            'ten_hinh_thuc_san_pham.max'         => 'Tên Hình Thức Sản Phẩm Chỉ Nhiều Nhất 100 Ký Tự',
            'ten_hinh_thuc_san_pham.unique'      => 'Tên Hình Thức Sản Phẩm Đã Bị Trùng'
        ];
    }
}
