<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\HinhThucSanPham;
use App\Http\Requests\ThemMoiHinhThucSanPhamRequest;
use App\Http\Requests\CapNhatHinhThucSanPhamRequest;

class HinhThucSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsHinhThucSanPham = HinhThucSanPham::all();
        return view('Admin.hinh-thuc-san-pham.ds-hinh-thuc-san-pham', compact('dsHinhThucSanPham'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.hinh-thuc-san-pham.them-moi-hinh-thuc-san-pham');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThemMoiHinhThucSanPhamRequest $request)
    {
        $hinhthucsanPhams = new HinhThucSanPham;
        $hinhthucsanPhams->loai_hinh_thuc_san_pham  = $request->loai_hinh_thuc_san_pham;
        $hinhthucsanPhams->ten_hinh_thuc_san_pham = $request->ten_hinh_thuc_san_pham;
        $hinhthucsanPhams->save();

        return redirect()->route('hinh-thuc-san-pham.them-moi')->with('thongbaothanhcong', 'THÊM MỚI HÌNH THỨC SẢN PHẨM THÀNH CÔNG');
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
        $hinhthucsanPhams = HinhThucSanPham::find($id);
        return view('Admin.hinh-thuc-san-pham.cap-nhat-hinh-thuc-san-pham', compact('hinhthucsanPhams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CapNhatHinhThucSanPhamRequest $request, $id)
    {
        $hinhthucsanPhams = HinhThucSanPham::find($id);
        $hinhthucsanPhams->ten_hinh_thuc_san_pham = $request->ten_hinh_thuc_san_pham;
        $hinhthucsanPhams->save();

        return redirect()->route('hinh-thuc-san-pham.cap-nhat', $hinhthucsanPhams->id)->with('thongbaothanhcong', 'CẬP NHẬT HÌNH THỨC SẢN PHẨM THÀNH CÔNG');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hinhthucsanPhams = HinhThucSanPham::find($id);
        $hinhthucsanPhams->delete();

        return redirect()->route('hinh-thuc-san-pham.danh-sach')->with('thongbaothanhcong', 'XÓA HÌNH THỨC SẢN PHẨM THÀNH CÔNG');
    }

    public function recycleBin()
    {
        $dsHinhThucSanPham = HinhThucSanPham::onlyTrashed()->get();
        return view('Admin.hinh-thuc-san-pham.khoi-phuc-hinh-thuc-san-pham', compact('dsHinhThucSanPham'));
    }

    public function restore($id)
    {
        HinhThucSanPham::withTrashed()->where('id', $id)->restore();
        
        return redirect()->route('hinh-thuc-san-pham.thung-rac')->with('thongbaothanhcong', 'KHÔI PHỤC HÌNH THỨC SẢN PHẨM THÀNH CÔNG');
    }
}
