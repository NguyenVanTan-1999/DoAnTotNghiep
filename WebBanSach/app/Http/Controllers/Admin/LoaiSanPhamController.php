<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LoaiSanPham;
use App\QuanTriVien;
use App\Http\Requests\Admin\LoaiSanPham\ThemMoiLoaiSanPhamRequest;
use App\Http\Requests\Admin\LoaiSanPham\CapNhatLoaiSanPhamRequest;
use App\Http\Controllers\Controller;

class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsLoaiSanPham = LoaiSanPham::all();
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.loai-san-pham.ds-loai-san-pham', compact('dsLoaiSanPham', 'dsQuanTriVien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.loai-san-pham.them-moi-loai-san-pham', compact('dsQuanTriVien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThemMoiLoaiSanPhamRequest $request)
    {
        $loaisanPhams = new LoaiSanPham;
        $loaisanPhams->ma_loai_san_pham  = $request->ma_loai_san_pham;
        $loaisanPhams->ten_loai_san_pham = $request->ten_loai_san_pham;
        $loaisanPhams->save();

        return redirect()->route('loai-san-pham.them-moi')->with('thongbaothanhcong', 'THÊM MỚI LOẠI SẢN PHẨM THÀNH CÔNG');
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
        $loaisanPhams = LoaiSanPham::find($id);
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.loai-san-pham.cap-nhat-loai-san-pham', compact('loaisanPhams', 'dsQuanTriVien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CapNhatLoaiSanPhamRequest $request, $id)
    {
        $loaisanPhams = LoaiSanPham::find($id);
        $loaisanPhams->ten_loai_san_pham = $request->ten_loai_san_pham;
        $loaisanPhams->save();

        return redirect()->route('loai-san-pham.cap-nhat', $loaisanPhams->id)->with('thongbaothanhcong', 'CẬP NHẬT LOẠI SẢN PHẨM THÀNH CÔNG');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loaisanPhams = LoaiSanPham::find($id);
        $loaisanPhams->delete();

        return redirect()->route('loai-san-pham.danh-sach')->with('thongbaothanhcong', 'XÓA LOẠI SẢN PHẨM THÀNH CÔNG');
    }

    public function recycleBin()
    {
        $dsLoaiSanPham = LoaiSanPham::onlyTrashed()->get();
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.loai-san-pham.khoi-phuc-loai-san-pham', compact('dsLoaiSanPham', 'dsQuanTriVien'));
    }

    public function restore($id)
    {
        LoaiSanPham::withTrashed()->where('id', $id)->restore();

        return redirect()->route('loai-san-pham.thung-rac')->with('thongbaothanhcong', 'KHÔI PHỤC LOẠI SẢN PHẨM THÀNH CÔNG');
    }
}
