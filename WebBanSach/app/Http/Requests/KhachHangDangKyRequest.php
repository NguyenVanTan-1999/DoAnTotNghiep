<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhachHangDangKyRequest extends FormRequest
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
            'ho'                       => 'required|max:10',
            'ten'                      => 'required|max:30',
            'ten_tai_khoan'            => 'required|min:6|max:24|unique:tai_khoan,ten_tai_khoan',
            'email'                    => 'required|max:40|email|unique:tai_khoan,email',
            'so_dien_thoai'            => 'required|digits:10|numeric|unique:tai_khoan,so_dien_thoai',
            'do_tuoi'                  => 'required|digits_between:2,3|numeric',
            'gioi_tinh'                => 'required',
            'dia_chi'                  => 'required|max:100',
            'quoc_gia'                 => 'required',
            'anh_dai_dien'             => 'required|max:255|image|mimes:jpeg,png,jpg',
            'mat_khau'                 => 'required|min:6|max:32',
            'nhap_lai_mat_khau'        => 'required|min:6|max:32|same:mat_khau'
        ];
    }

    public function messages()
    {
        return [
            'ho.required'                         => 'Vui Lòng Nhập Họ',
            'ho.max'                              => 'Họ Chỉ Nhiều Nhất 10 Ký Tự',

            'ten.required'                        => 'Vui Lòng Nhập Tên',
            'ten.max'                             => 'Tên Chỉ Nhiều Nhất 30 Ký Tự',

            'ten_tai_khoan.required'              => 'Vui Lòng Nhập Tên Tài Khoản',
            'ten_tai_khoan.min'                   => 'Tên Tài Khoản Phải Ít Nhất 6 Ký Tự',
            'ten_tai_khoan.max'                   => 'Tên Tài Khoản Chỉ Nhiều Nhất 24 Ký Tự',
            'ten_tai_khoan.unique'                => 'Tên Tài Khoản Đã Bị Trùng',

            'email.required'                      => 'Vui Lòng Nhập Email',
            'email.max'                           => 'Email Chỉ Nhiều Nhất 40 Ký Tự',
            'email.email'                         => 'Email Phải Điền Đúng Định Dạng',
            'email.unique'                        => 'Email Đã Bị Trùng',

            'so_dien_thoai.required'              => 'Vui Lòng Nhập Số Điện Thoại',
            'so_dien_thoai.digits'                => 'Số Điện Thoại Phải Điền Đúng 10 Số',
            'so_dien_thoai.numeric'               => 'Số Điện Thoại Phải Là Số Nguyên',
            'so_dien_thoai.unique'                => 'Số Điện Thoại Đã Bị Trùng',

            'do_tuoi.required'                    => 'Vui Lòng Nhập Độ Tuổi',
            'do_tuoi.digits_between'              => 'Độ Tuổi Nằm Trong Khoảng 10 Tuổi Đến 100 Tuổi',
            'do_tuoi.numeric'                     => 'Độ Tuổi Phải Là Số Nguyên',

            'gioi_tinh.required'                  => 'Vui Lòng Chọn Giới Tính',

            'dia_chi.required'                    => 'Vui Lòng Nhập Địa Chỉ',
            'dia_chi.max'                         => 'Địa Chỉ Chỉ Nhiều Nhất 100 Ký Tự',

            'quoc_gia.required'                   => 'Vui Lòng Chọn Quốc Gia',

            'anh_dai_dien.required'               => 'Vui Lòng Chọn Ảnh Đại Diện',
            'anh_dai_dien.max'                    => 'Ảnh Đại Diện Chỉ Nhiều Nhất 255 Ký Tự',
            'anh_dai_dien.image'                  => 'Ảnh Đại Diện Phải Là Định Dạng Hình Ảnh',
            'anh_dai_dien.mimes'                  => 'Ảnh Đại Diện Phải Có Đuôi Mở Rộng Là JPEG, PNG Hoặc JPG',

            'mat_khau.required'                   => 'Vui Lòng Nhập Mật Khẩu',
            'mat_khau.min'                        => 'Mật Khẩu Phải Ít Nhất 6 Ký Tự',
            'mat_khau.max'                        => 'Mật Khẩu Chỉ Nhiều Nhất 32 Ký Tự',

            'nhap_lai_mat_khau.required'          => 'Vui Lòng Nhập Nhập Lại Mật Khẩu',
            'nhap_lai_mat_khau.min'               => 'Nhập Lại Mật Khẩu Phải Ít Nhất 6 Ký Tự',
            'nhap_lai_mat_khau.max'               => 'Nhập Lại Mật Khẩu Chỉ Nhiều Nhất 32 Ký Tự',
            'nhap_lai_mat_khau.same'              => 'Nhập Lại Mật Khẩu Không Khớp'
        ];
    }
}
