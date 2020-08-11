<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Slider;
use App\QuanTriVien;
use App\Http\Requests\Admin\Slider\ThemMoiSliderRequest;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsSlider = Slider::all();
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.slider.ds-slider', compact('dsSlider', 'dsQuanTriVien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.slider.them-moi-slider', compact('dsQuanTriVien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThemMoiSliderRequest $request)
    {
        $Sliders = new Slider;

        if($request->hasFile('hinh_anh_slider'))
        {
            $file = $request->file('hinh_anh_slider');
            $filename = $file->store('');
            $file->move('images/slider/', $filename);
        }
        $Sliders->hinh_anh_slider = $filename;
        $Sliders->save();

        return redirect()->route('slider.them-moi')->with('thongbaothanhcong', 'THÊM MỚI SLIDER THÀNH CÔNG');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Sliders = Slider::find($id);
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.slider.cap-nhat-slider', compact('Sliders', 'dsQuanTriVien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Sliders = Slider::find($id);

        $this->validate($request,
        [
            'hinh_anh_slider' => 'required|max:255|image|mimes:jpeg,png,jpg'
        ],

        [
            'required'    => 'Vui Lòng Chọn :attribute',
            'max'         => ':attribute Chỉ Nhiều Nhất 255 Ký Tự',
            'image'       => ':attribute Phải Là Định Dạng Hình Ảnh',
            'mimes'       => ':attribute Phải Có Đuôi Mở Rộng Là JPEG, PNG Hoặc JPG'
        ],

        [
            'hinh_anh_slider' => 'Hình Ảnh Slider Mới'
        ]);

        if($request->hasFile('hinh_anh_slider'))
        {
            $file = $request->file('hinh_anh_slider');
            $filename = $file->store('');
            $file->move('images/slider/', $filename);
        }
        $Sliders->hinh_anh_slider = $filename;
        $Sliders->save();

        return redirect()->route('slider.cap-nhat', $Sliders->id)->with('thongbaothanhcong', 'CẬP NHẬT SLIDER THÀNH CÔNG');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Sliders = Slider::find($id);
        $Sliders->delete();

        return redirect()->route('slider.danh-sach')->with('thongbaothanhcong', 'XÓA SLIDER THÀNH CÔNG');
    }

    public function recycleBin()
    {
        $dsSlider = Slider::onlyTrashed()->get();
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.slider.khoi-phuc-slider', compact('dsSlider', 'dsQuanTriVien'));
    }

    public function restore($id)
    {
        Slider::withTrashed()->where('id', $id)->restore();

        return redirect()->route('slider.thung-rac')->with('thongbaothanhcong', 'KHÔI PHỤC SLIDER THÀNH CÔNG');
    }
}
