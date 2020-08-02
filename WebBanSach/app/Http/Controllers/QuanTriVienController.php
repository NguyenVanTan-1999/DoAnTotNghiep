<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DangNhapRequest;
use App\Http\Requests\CapNhatQuanTriVienRequest;
use Hash;

class QuanTriVienController extends Controller
{
    protected $redirectTo = 'trang-chu-admin';

    public function dangnhapAdmin()
    {
        return view ('Admin.login');
    }

    public function xulydangnhapAdmin(DangNhapRequest $request)
    {
        $ten_tai_khoan_admin = $request->ten_tai_khoan_admin;
        $mat_khau_admin      = $request->mat_khau_admin;

        if(Auth::guard('admin')->attempt(['ten_tai_khoan_admin' => $ten_tai_khoan_admin, 'password' => $mat_khau_admin]))
        {
            return redirect()->route('trang-chu-admin');
        }

        return redirect()->route('dang-nhap-admin')->with('thongbaothatbai','TÀI KHOẢN ADMIN KHÔNG ĐÚNG');
    }

    public function laythongtinAdmin()
    {
        return Auth::guard('admin')->user();
    }

    public function dangxuatAdmin()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('dang-nhap-admin');
    }

    public function capnhatAdmin($id)
    {
        $quantriViens = QuanTriVien::find($id);
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.quan-tri-vien.cap-nhat-quan-tri-vien', compact('quantriViens', 'dsQuanTriVien'));
    }

    public function xulycapnhatAdmin(CapNhatQuanTriVienRequest $request, $id)
    {
        $quantriViens = QuanTriVien::find($id);
        $quantriViens->ho_ten_admin = $request->ho_ten_admin;
        $quantriViens->save();

        return redirect()->route('cap-nhat-admin', $quantriViens->id)->with('thongbaothanhcong', 'CẬP NHẬT THÔNG TIN QUẢN TRỊ VIÊN THÀNH CÔNG');
    }

    public function xulydangtaiAdmin(Request $request, $id)
    {
        $quantriViens = QuanTriVien::find($id);

        $this->validate($request,
        [
            'anh_dai_dien_admin' => 'required|max:255|image|mimes:jpeg,png,jpg'
        ],

        [
            'required'    => 'Vui Lòng Chọn :attribute',
            'max'         => ':attribute Chỉ Nhiều Nhất 255 Ký Tự',
            'image'       => ':attribute Phải Là Định Dạng Hình Ảnh',
            'mimes'       => ':attribute Phải Có Đuôi Mở Rộng Là JPEG, PNG Hoặc JPG'
        ],

        [
            'anh_dai_dien_admin' => 'Ảnh Đại Diện Admin'
        ]);

        if($request->hasFile('anh_dai_dien_admin'))
        {
            $file = $request->file('anh_dai_dien_admin');
            $filename = $file->store('');
            $file->move('images/admin/', $filename);
        }
        $quantriViens->anh_dai_dien_admin = $filename;
        $quantriViens->save();

        return redirect()->route('cap-nhat-admin', $quantriViens->id)->with('thongbaothanhcong', 'CẬP NHẬT HÌNH ẢNH QUẢN TRỊ VIÊN THÀNH CÔNG');
    }

    public function xulydoimatkhauAdmin(Request $request, $id)
    {
        $this->validate($request,
        [
            'mat_khau_admin_cu'           => 'required|min:6|max:32',
            'mat_khau_admin'              => 'required|min:6|max:32',
            'nhap_lai_mat_khau_admin_moi' => 'required|min:6|max:32|same:mat_khau_admin'
        ],

        [
            'required'    => 'Vui Lòng Nhập :attribute',
            'min'         => ':attribute Phải Ít Nhất 6 Ký Tự',
            'max'         => ':attribute Chỉ Nhiều Nhất 32 Ký Tự',
            'same'        => ':attribute Không Khớp'
        ],

        [
            'mat_khau_admin_cu'           => 'Mật Khẩu Admin Cũ',
            'mat_khau_admin'              => 'Mật Khẩu Admin Mới',
            'nhap_lai_mat_khau_admin_moi' => 'Nhập Lại Mật Khẩu Admin Mới'
        ]);

        $quantriViens = QuanTriVien::find($id);
        if(!Hash::check($request->mat_khau_admin_cu, $quantriViens->mat_khau_admin))
        {
            return redirect()->route('cap-nhat-admin', $quantriViens->id)->with('thongbaothatbai', 'CẬP NHẬT MẬT KHẨU ADMIN QUẢN TRỊ VIÊN THẤT BẠI');
        }
        else
        {
            if(!Hash::check($request->mat_khau_admin, $quantriViens->mat_khau_admin))
            {
                $quantriViens->mat_khau_admin = Hash::make($request->mat_khau_admin);
                $quantriViens->save();

                return redirect()->route('cap-nhat-admin', $quantriViens->id)->with('thongbaothanhcong', 'CẬP NHẬT MẬT KHẨU ADMIN QUẢN TRỊ VIÊN THÀNH CÔNG');
            }
            else
            {
                return redirect()->route('cap-nhat-admin', $quantriViens->id)->with('thongbaothatbai', 'MẬT KHẨU ADMIN MỚI KHÔNG ĐƯỢC TRÙNG VỚI MẬT KHẨU ADMIN HIỆN TẠI');
            }
        }
    }
}
