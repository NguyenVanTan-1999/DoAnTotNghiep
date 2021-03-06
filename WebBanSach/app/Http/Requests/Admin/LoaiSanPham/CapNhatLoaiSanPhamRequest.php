<?php

namespace App\Http\Requests\Admin\LoaiSanPham;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatLoaiSanPhamRequest extends FormRequest
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
            'ten_loai_san_pham' => 'required|max:40|unique:loai_san_pham,ten_loai_san_pham'
        ];
    }

    public function messages()
    {
        return [
            'ten_loai_san_pham.required'  => 'Vui Lòng Nhập Tên Loại Sản Phẩm',
            'ten_loai_san_pham.max'       => 'Tên Loại Sản Phẩm Chỉ Nhiều Nhất 40 Ký Tự',
            'ten_loai_san_pham.unique'    => 'Tên Loại Sản Phẩm Đã Bị Trùng'
        ];
    }
}
