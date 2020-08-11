<?php

namespace App\Http\Requests\Admin\Banner;

use Illuminate\Foundation\Http\FormRequest;

class ThemMoiBannerRequest extends FormRequest
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
            'hinh_anh_banner'  => 'required|max:255|image|mimes:jpeg,png,jpg'
        ];
    }

    public function messages()
    {
        return [
            'hinh_anh_banner.required'    => 'Vui Lòng Chọn Hình Ảnh Banner',
            'hinh_anh_banner.max'         => 'Hình Ảnh Banner Chỉ Nhiều Nhất 255 Ký Tự',
            'hinh_anh_banner.image'       => 'Hình Ảnh Banner Phải Là Định Dạng Hình Ảnh',
            'hinh_anh_banner.mimes'       => 'Hình Ảnh Banner Phải Có Đuôi Mở Rộng Là JPEG, PNG Hoặc JPG'
        ];
    }
}
