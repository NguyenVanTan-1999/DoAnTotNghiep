<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TaiKhoan;
use App\QuanTriVien;
use App\Http\Requests\Admin\TaiKhoan\ThemMoiTaiKhoanRequest;
use App\Http\Requests\Admin\TaiKhoan\CapNhatTaiKhoanRequest;
use Hash;
use App\Http\Controllers\Controller;

class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsTaiKhoan = TaiKhoan::all();
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.tai-khoan.ds-tai-khoan', compact('dsTaiKhoan', 'dsQuanTriVien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.tai-khoan.them-moi-tai-khoan', compact('dsQuanTriVien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThemMoiTaiKhoanRequest $request)
    {
        $taiKhoans = new TaiKhoan;
        $taiKhoans->ten_tai_khoan  = $request->ten_tai_khoan;
        $taiKhoans->mat_khau = Hash::make($request->mat_khau);
        $taiKhoans->ho_ten = $request->ho_ten;
        $taiKhoans->do_tuoi = $request->do_tuoi;
        $taiKhoans->gioi_tinh = $request->gioi_tinh;
        $taiKhoans->dia_chi = $request->dia_chi;
        $taiKhoans->quoc_gia = $request->quoc_gia;
        $taiKhoans->email = $request->email;
        $taiKhoans->so_dien_thoai = $request->so_dien_thoai;

        if($request->hasFile('anh_dai_dien'))
        {
            $file = $request->file('anh_dai_dien');
            $filename = $file->store('');
            $file->move('images/user/', $filename);
        }
        $taiKhoans->anh_dai_dien = $filename;
        $taiKhoans->save();

        return redirect()->route('tai-khoan.them-moi')->with('thongbaothanhcong', 'THÊM MỚI TÀI KHOẢN THÀNH CÔNG');
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
        $taiKhoans = TaiKhoan::find($id);
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.tai-khoan.cap-nhat-tai-khoan', compact('taiKhoans', 'dsQuanTriVien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CapNhatTaiKhoanRequest $request, $id)
    {
        $taiKhoans = TaiKhoan::find($id);
        $taiKhoans->ho_ten = $request->ho_ten;
        $taiKhoans->do_tuoi = $request->do_tuoi;
        $taiKhoans->gioi_tinh = $request->gioi_tinh;
        $taiKhoans->dia_chi = $request->dia_chi;
        $taiKhoans->quoc_gia = $request->quoc_gia;
        $taiKhoans->email = $request->email;
        $taiKhoans->so_dien_thoai = $request->so_dien_thoai;
        $taiKhoans->save();

        return redirect()->route('tai-khoan.cap-nhat', $taiKhoans->id)->with('thongbaothanhcong', 'CẬP NHẬT THÔNG TIN TÀI KHOẢN THÀNH CÔNG');
    }

    public function upload(Request $request, $id)
    {
        $taiKhoans = TaiKhoan::find($id);

        $this->validate($request,
        [
            'anh_dai_dien' => 'required|max:255|image|mimes:jpeg,png,jpg'
        ],

        [
            'required'    => 'Vui Lòng Chọn :attribute',
            'max'         => ':attribute Chỉ Nhiều Nhất 255 Ký Tự',
            'image'       => ':attribute Phải Là Định Dạng Hình Ảnh',
            'mimes'       => ':attribute Phải Có Đuôi Mở Rộng Là JPEG, PNG Hoặc JPG'
        ],

        [
            'anh_dai_dien' => 'Ảnh Đại Diện Mới'
        ]);

        if($request->hasFile('anh_dai_dien'))
        {
            $file = $request->file('anh_dai_dien');
            $filename = $file->store('');
            $file->move('images/user/', $filename);
        }
        $taiKhoans->anh_dai_dien = $filename;
        $taiKhoans->save();

        return redirect()->route('tai-khoan.cap-nhat', $taiKhoans->id)->with('thongbaothanhcong', 'CẬP NHẬT HÌNH ẢNH TÀI KHOẢN THÀNH CÔNG');
    }

    public function changePassword(Request $request, $id)
    {
        $this->validate($request,
        [
            'mat_khau_cu'           => 'required|min:6|max:32',
            'mat_khau'              => 'required|min:6|max:32',
            'nhap_lai_mat_khau_moi' => 'required|min:6|max:32|same:mat_khau'
        ],

        [
            'required'    => 'Vui Lòng Nhập :attribute',
            'min'         => ':attribute Phải Ít Nhất 6 Ký Tự',
            'max'         => ':attribute Chỉ Nhiều Nhất 32 Ký Tự',
            'same'        => ':attribute Không Khớp'
        ],

        [
            'mat_khau_cu'           => 'Mật Khẩu Cũ',
            'mat_khau'              => 'Mật Khẩu Mới',
            'nhap_lai_mat_khau_moi' => 'Nhập Lại Mật Khẩu Mới'
        ]);

        $taiKhoans = TaiKhoan::find($id);
        if(!Hash::check($request->mat_khau_cu, $taiKhoans->mat_khau))
        {
            return redirect()->route('tai-khoan.cap-nhat', $taiKhoans->id)->with('thongbaothatbai', 'CẬP NHẬT MẬT KHẨU TÀI KHOẢN THẤT BẠI');
        }
        else
        {
            if(!Hash::check($request->mat_khau, $taiKhoans->mat_khau))
            {
                $taiKhoans->mat_khau = Hash::make($request->mat_khau);
                $taiKhoans->save();

                return redirect()->route('tai-khoan.cap-nhat', $taiKhoans->id)->with('thongbaothanhcong', 'CẬP NHẬT MẬT KHẨU TÀI KHOẢN THÀNH CÔNG');
            }
            else
            {
                return redirect()->route('tai-khoan.cap-nhat', $taiKhoans->id)->with('thongbaothatbai', 'MẬT KHẨU MỚI KHÔNG ĐƯỢC TRÙNG VỚI MẬT KHẨU HIỆN TẠI');
            }
        }
    }

    public function laymatkhauUser()
    {
        $mat_khau = TaiKhoan::select('mat_khau')->get();
        return $mat_khau;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taiKhoans = TaiKhoan::find($id);
        $taiKhoans->delete();

        return redirect()->route('tai-khoan.danh-sach')->with('thongbaothanhcong', 'KHÓA TÀI KHOẢN THÀNH CÔNG');
    }

    public function recycleBin()
    {
        $dsTaiKhoan = TaiKhoan::onlyTrashed()->get();
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.tai-khoan.khoi-phuc-tai-khoan', compact('dsTaiKhoan', 'dsQuanTriVien'));
    }

    public function restore($id)
    {
        TaiKhoan::withTrashed()->where('id', $id)->restore();

        return redirect()->route('tai-khoan.thung-rac')->with('thongbaothanhcong', 'MỞ KHÓA TÀI KHOẢN THÀNH CÔNG');
    }
}
