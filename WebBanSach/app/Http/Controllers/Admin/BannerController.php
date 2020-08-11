<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Banner;
use App\QuanTriVien;
use App\Http\Requests\Admin\Banner\ThemMoiBannerRequest;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsBanner = Banner::all();
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.banner.ds-banner', compact('dsBanner', 'dsQuanTriVien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.banner.them-moi-banner', compact('dsQuanTriVien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThemMoiBannerRequest $request)
    {
        $Banners = new Banner;

        if($request->hasFile('hinh_anh_banner'))
        {
            $file = $request->file('hinh_anh_banner');
            $filename = $file->store('');
            $file->move('images/banner/', $filename);
        }
        $Banners->hinh_anh_banner = $filename;
        $Banners->save();

        return redirect()->route('banner.them-moi')->with('thongbaothanhcong', 'THÊM MỚI BANNER THÀNH CÔNG');
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
        $Banners = Banner::find($id);
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.banner.cap-nhat-banner', compact('Banners', 'dsQuanTriVien'));
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
        $Banners = Banner::find($id);

        $this->validate($request,
        [
            'hinh_anh_banner' => 'required|max:255|image|mimes:jpeg,png,jpg'
        ],

        [
            'required'    => 'Vui Lòng Chọn :attribute',
            'max'         => ':attribute Chỉ Nhiều Nhất 255 Ký Tự',
            'image'       => ':attribute Phải Là Định Dạng Hình Ảnh',
            'mimes'       => ':attribute Phải Có Đuôi Mở Rộng Là JPEG, PNG Hoặc JPG'
        ],

        [
            'hinh_anh_banner' => 'Hình Ảnh Banner Mới'
        ]);

        if($request->hasFile('hinh_anh_banner'))
        {
            $file = $request->file('hinh_anh_banner');
            $filename = $file->store('');
            $file->move('images/banner/', $filename);
        }
        $Banners->hinh_anh_banner = $filename;
        $Banners->save();

        return redirect()->route('banner.cap-nhat', $Banners->id)->with('thongbaothanhcong', 'CẬP NHẬT BANNER THÀNH CÔNG');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Banners = Banner::find($id);
        $Banners->delete();

        return redirect()->route('banner.danh-sach')->with('thongbaothanhcong', 'XÓA BANNER THÀNH CÔNG');
    }

    public function recycleBin()
    {
        $dsBanner = Banner::onlyTrashed()->get();
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.banner.khoi-phuc-banner', compact('dsBanner', 'dsQuanTriVien'));
    }

    public function restore($id)
    {
        Banner::withTrashed()->where('id', $id)->restore();

        return redirect()->route('banner.thung-rac')->with('thongbaothanhcong', 'KHÔI PHỤC BANNER THÀNH CÔNG');
    }
}
