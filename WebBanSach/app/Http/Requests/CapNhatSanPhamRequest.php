<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatSanPhamRequest extends FormRequest
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
            'ten_san_pham'           => 'required|max:100',
            'thong_tin_san_pham'     => 'required|max:255',
            'ngay_xuat_ban_san_pham' => 'required|date',
            'gia_tien_san_pham'      => 'required|digits_between:4,6|numeric',
            'anh_minh_hoa_san_pham'  => 'required|max:255',
            'nha_xuat_ban_id'        => 'required',
            'loai_san_pham_id'       => 'required',
            'hinh_thuc_san_pham_id'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'ten_san_pham.required'             => 'Vui Lòng Nhập Tên Sản Phẩm',
            'ten_san_pham.max'                  => 'Tên Sản Phẩm Chỉ Nhiều Nhất 100 Ký Tự',

            'thong_tin_san_pham.required'       => 'Vui Lòng Nhập Thông Tin Sản Phẩm',
            'thong_tin_san_pham.max'            => 'Thông Tin Sản Phẩm Chỉ Nhiều Nhất 255 Ký Tự',

            'ngay_xuat_ban_san_pham.required'   => 'Vui Lòng Chọn Ngày Xuất Bản Sản Phẩm',
            'ngay_xuat_ban_san_pham.date'       => 'Ngày Xuất Bản Sản Phẩm Phải Là Ngày Hợp Lệ',

            'gia_tien_san_pham.required'        => 'Vui Lòng Nhập Giá Tiền Sản Phẩm',
            'gia_tien_san_pham.digits_between'  => 'Giá Tiền Sản Phẩm Nằm Trong Khoảng 4 Đến 6 Ký Tự',
            'gia_tien_san_pham.numeric'         => 'Giá Tiền Sản Phẩm Phải Là Số Nguyên',

            'anh_minh_hoa_san_pham.required'    => 'Vui Lòng Chọn Ảnh Minh Họa Sản Phẩm',
            'anh_minh_hoa_san_pham.max'         => 'Ảnh Minh Họa Sản Phẩm Chỉ Nhiều Nhất 255 Ký Tự',

            'nha_xuat_ban_id.required'          => 'Vui Lòng Chọn Nhà Xuất Bản',

            'loai_san_pham_id.required'         => 'Vui Lòng Chọn Loại Sản Phẩm',

            'hinh_thuc_san_pham_id.required'    => 'Vui Lòng Chọn Hình Thức Sản Phẩm'
        ];
    }
}
