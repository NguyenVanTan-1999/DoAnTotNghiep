<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class QuanTriVienController extends Controller
{
    protected $redirectTo = 'trang-chu-admin';

    public function dangnhapAdmin()
    {
        return view ('Admin.login');
    }

    public function xulydangnhapAdmin(Request $request)
    {
        $ten_tai_khoan_admin = $request->ten_tai_khoan_admin;
        $mat_khau_admin      = $request->mat_khau_admin;

        if(Auth::attempt(['ten_tai_khoan_admin' => $ten_tai_khoan_admin, 'password' => $mat_khau_admin]))
        {
            return redirect()->route('trang-chu-admin');    
        }

        return redirect()->route('dang-nhap-admin')->with('thongbao', 'dang nhap that bai');
    }

    public function laythongtinAdmin()
    {
        return Auth::user();
    }

    public function dangxuatAdmin()
    {
        Auth::logout();
        return redirect()->route('dang-nhap-admin');
    }
}
