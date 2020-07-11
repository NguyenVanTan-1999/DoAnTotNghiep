<?php

namespace App\Http\Requests;

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
            'ten_loai_san_pham' => 'required|unique:loai_san_pham,ten_loai_san_pham'
        ];
    }

    public function messages()
    {
        return [
            'ten_loai_san_pham.required'  => 'Vui Lòng Nhập Tên Loại Sản Phẩm Mới',
            'ten_loai_san_pham.unique'    => 'Tên Loại Sản Phẩm Mới Đã Bị Trùng'
        ];
    }
}
