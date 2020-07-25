<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatHinhThucSanPhamRequest extends FormRequest
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
            'ten_hinh_thuc_san_pham' => 'required|max:40|unique:hinh_thuc_san_pham,ten_hinh_thuc_san_pham'
        ];
    }

    public function messages()
    {
        return [
            'ten_hinh_thuc_san_pham.required'  => 'Vui Lòng Nhập Tên Hình Thức Sản Phẩm',
            'ten_hinh_thuc_san_pham.max'       => 'Tên Hình Thức Sản Phẩm Chỉ Nhiều Nhất 40 Ký Tự',
            'ten_hinh_thuc_san_pham.unique'    => 'Tên Hình Thức Sản Phẩm Đã Bị Trùng'
        ];
    }
}
