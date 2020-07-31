<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TaiKhoan;
use App\Http\Requests\KhachHangDangKyRequest;
use Hash;

class HomeWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Web.home');
    }

    public function dangKy()
    {
        return view('Web.register');
    }

    public function xulydangKy(KhachHangDangKyRequest $request)
    {
        $ho = $request->ho;
        $ten = $request->ten;

        $dangKys = new TaiKhoan;
        $dangKys->ho_ten = $ho . " " . $ten;
        $dangKys->ten_tai_khoan  = $request->ten_tai_khoan;
        $dangKys->email = $request->email;
        $dangKys->so_dien_thoai = $request->so_dien_thoai;
        $dangKys->do_tuoi = $request->do_tuoi;
        $dangKys->gioi_tinh = $request->gioi_tinh;
        $dangKys->dia_chi = $request->dia_chi;
        $dangKys->quoc_gia = $request->quoc_gia;

        if($request->hasFile('anh_dai_dien'))
        {
            $file = $request->file('anh_dai_dien');
            $filename = $file->store('');
            $file->move('images/user/', $filename);
        }
        $dangKys->anh_dai_dien = $filename;

        $dangKys->mat_khau = Hash::make($request->mat_khau);
        $dangKys->save();

        return redirect()->route('website-ban-sach.dang-ky')->with('thongbaothanhcong', 'ĐĂNG KÝ TÀI KHOẢN THÀNH CÔNG');
    }

    public function dangNhap()
    {
        return view('Web.login');
    }
}
