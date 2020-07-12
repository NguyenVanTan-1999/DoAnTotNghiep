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
            'ten_hinh_thuc_san_pham' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'ten_hinh_thuc_san_pham.required'  => 'Vui Lòng Nhập Tên Hình Thức Sản Phẩm'
        ];
    }
}
