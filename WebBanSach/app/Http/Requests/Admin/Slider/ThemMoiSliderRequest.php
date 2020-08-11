<?php

namespace App\Http\Requests\Admin\Slider;

use Illuminate\Foundation\Http\FormRequest;

class ThemMoiSliderRequest extends FormRequest
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
            'hinh_anh_slider'  => 'required|max:255|image|mimes:jpeg,png,jpg'
        ];
    }

    public function messages()
    {
        return [
            'hinh_anh_slider.required'    => 'Vui Lòng Chọn Hình Ảnh Slider',
            'hinh_anh_slider.max'         => 'Hình Ảnh Slider Chỉ Nhiều Nhất 255 Ký Tự',
            'hinh_anh_slider.image'       => 'Hình Ảnh Slider Phải Là Định Dạng Hình Ảnh',
            'hinh_anh_slider.mimes'       => 'Hình Ảnh Slider Phải Có Đuôi Mở Rộng Là JPEG, PNG Hoặc JPG'
        ];
    }
}
