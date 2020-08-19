<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\HoaDon;
use App\QuanTriVien;
use App\Http\Controllers\Controller;

class HoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsHoaDon = HoaDon::where('trang_thai', '=', 0)->get();
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.hoa-don.ds-hoa-don', compact('dsHoaDon', 'dsQuanTriVien'));
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hoaDons = HoaDon::find($id);
        $hoaDons->trang_thai = true;
        $hoaDons->save();

        return redirect()->route('hoa-don.danh-sach')->with('thongbaothanhcong', 'XÁC NHẬN HÓA ĐƠN THÀNH CÔNG');
    }

    public function dsdaDuyet()
    {
        $dsHoaDon = HoaDon::where('trang_thai', '=', 1)->get();
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.hoa-don.ds-da-duyet', compact('dsHoaDon', 'dsQuanTriVien'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hoaDons = HoaDon::find($id);
        $hoaDons->delete();

        return redirect()->route('hoa-don.danh-sach')->with('thongbaothanhcong', 'HỦY HÓA ĐƠN THÀNH CÔNG');
    }

    public function recycleBin()
    {
        $dsHoaDon = HoaDon::onlyTrashed()->get();
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.hoa-don.khoi-phuc-hoa-don', compact('dsHoaDon', 'dsQuanTriVien'));
    }

    public function restore($id)
    {
        HoaDon::withTrashed()->where('id', $id)->restore();

        return redirect()->route('hoa-don.thung-rac')->with('thongbaothanhcong', 'KHÔI PHỤC HÓA ĐƠN THÀNH CÔNG');
    }
}
