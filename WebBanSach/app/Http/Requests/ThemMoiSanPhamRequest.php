<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemMoiSanPhamRequest extends FormRequest
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
            'ma_san_pham'            => 'required|min:5|max:10|unique:san_pham,ma_san_pham',
            'ten_san_pham'           => 'required|max:60|unique:san_pham,ten_san_pham',
            'thong_tin_san_pham'     => 'required|max:1000',
            'ngay_xuat_ban_san_pham' => 'required',
            'gia_tien_san_pham'      => 'required|digits_between:4,6|numeric',
            'anh_minh_hoa_san_pham'  => 'required|max:255|image|mimes:jpeg,png,jpg',
            'nha_xuat_ban_id'        => 'required',
            'loai_san_pham_id'       => 'required',
            'hinh_thuc_san_pham_id'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'ma_san_pham.required'              => 'Vui Lòng Nhập Mã Sản Phẩm',
            'ma_san_pham.min'                   => 'Mã Sản Phẩm Phải Ít Nhất 5 Ký Tự',
            'ma_san_pham.max'                   => 'Mã Sản Phẩm Chỉ Nhiều Nhất 10 Ký Tự',
            'ma_san_pham.unique'                => 'Mã Sản Phẩm Đã Bị Trùng',

            'ten_san_pham.required'             => 'Vui Lòng Nhập Tên Sản Phẩm',
            'ten_san_pham.max'                  => 'Tên Sản Phẩm Chỉ Nhiều Nhất 60 Ký Tự',
            'ten_san_pham.unique'               => 'Tên Sản Phẩm Đã Bị Trùng',

            'thong_tin_san_pham.required'       => 'Vui Lòng Nhập Thông Tin Sản Phẩm',
            'thong_tin_san_pham.max'            => 'Thông Tin Sản Phẩm Chỉ Nhiều Nhất 1000 Ký Tự',

            'ngay_xuat_ban_san_pham.required'   => 'Vui Lòng Chọn Ngày Xuất Bản Sản Phẩm',

            'gia_tien_san_pham.required'        => 'Vui Lòng Nhập Giá Tiền Sản Phẩm',
            'gia_tien_san_pham.digits_between'  => 'Giá Tiền Sản Phẩm Nằm Trong Khoảng 1.000 VNĐ Đến 999.999 VNĐ',
            'gia_tien_san_pham.numeric'         => 'Giá Tiền Sản Phẩm Phải Là Số Nguyên',

            'anh_minh_hoa_san_pham.required'    => 'Vui Lòng Chọn Ảnh Minh Họa Sản Phẩm',
            'anh_minh_hoa_san_pham.max'         => 'Ảnh Minh Họa Sản Phẩm Chỉ Nhiều Nhất 255 Ký Tự',
            'anh_minh_hoa_san_pham.image'       => 'Ảnh Minh Họa Sản Phẩm Phải Là Định Dạng Hình Ảnh',
            'anh_minh_hoa_san_pham.mimes'       => 'Ảnh Minh Họa Sản Phẩm Phải Có Đuôi Mở Rộng Là JPEG, PNG Hoặc JPG',

            'nha_xuat_ban_id.required'          => 'Vui Lòng Chọn Nhà Xuất Bản',

            'loai_san_pham_id.required'         => 'Vui Lòng Chọn Loại Sản Phẩm',

            'hinh_thuc_san_pham_id.required'    => 'Vui Lòng Chọn Hình Thức Sản Phẩm'
        ];
    }
}
