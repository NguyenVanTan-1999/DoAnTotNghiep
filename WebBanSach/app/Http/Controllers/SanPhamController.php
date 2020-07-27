<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SanPham;
use App\NhaXuatBan;
use App\LoaiSanPham;
use App\HinhThucSanPham;
use App\QuanTriVien;
use App\Http\Requests\ThemMoiSanPhamRequest;
use App\Http\Requests\CapNhatSanPhamRequest;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsSanPham = SanPham::all();
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.san-pham.ds-san-pham', compact('dsSanPham', 'dsQuanTriVien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsNhaXuatBan = NhaXuatBan::all();
        $dsLoaiSanPham = LoaiSanPham::all();
        $dsHinhThucSanPham = HinhThucSanPham::all();
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.san-pham.them-moi-san-pham', compact('dsNhaXuatBan', 'dsLoaiSanPham', 'dsHinhThucSanPham', 'dsQuanTriVien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThemMoiSanPhamRequest $request)
    {
        $sanPhams = new SanPham;
        $sanPhams->ma_san_pham  = $request->ma_san_pham;
        $sanPhams->ten_san_pham = $request->ten_san_pham;
        $sanPhams->thong_tin_san_pham = $request->thong_tin_san_pham;
        $sanPhams->ngay_xuat_ban_san_pham = $request->ngay_xuat_ban_san_pham;
        $sanPhams->gia_tien_san_pham = $request->gia_tien_san_pham;

        if($request->hasFile('anh_minh_hoa_san_pham'))
        {
            $file = $request->file('anh_minh_hoa_san_pham');
            $filename = $file->store('');
            $file->move('images/product/', $filename);
        }
        $sanPhams->anh_minh_hoa_san_pham = $filename;

        $sanPhams->nha_xuat_ban_id = $request->nha_xuat_ban_id;
        $sanPhams->loai_san_pham_id = $request->loai_san_pham_id;
        $sanPhams->hinh_thuc_san_pham_id = $request->hinh_thuc_san_pham_id;
        $sanPhams->save();

        return redirect()->route('san-pham.them-moi')->with('thongbaothanhcong', 'THÊM MỚI SẢN PHẨM THÀNH CÔNG');
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
        $dsNhaXuatBan = NhaXuatBan::all();
        $dsLoaiSanPham = LoaiSanPham::all();
        $dsHinhThucSanPham = HinhThucSanPham::all();
        $sanPhams = SanPham::find($id);
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.san-pham.cap-nhat-san-pham', compact('sanPhams', 'dsNhaXuatBan', 'dsLoaiSanPham', 'dsHinhThucSanPham', 'dsQuanTriVien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CapNhatSanPhamRequest $request, $id)
    {
        $sanPhams = SanPham::find($id);
        $sanPhams->ten_san_pham = $request->ten_san_pham;
        $sanPhams->thong_tin_san_pham = $request->thong_tin_san_pham;
        $sanPhams->ngay_xuat_ban_san_pham = $request->ngay_xuat_ban_san_pham;
        $sanPhams->gia_tien_san_pham = $request->gia_tien_san_pham;
        $sanPhams->nha_xuat_ban_id = $request->nha_xuat_ban_id;
        $sanPhams->loai_san_pham_id = $request->loai_san_pham_id;
        $sanPhams->hinh_thuc_san_pham_id = $request->hinh_thuc_san_pham_id;
        $sanPhams->save();

        return redirect()->route('san-pham.cap-nhat', $sanPhams->id)->with('thongbaothanhcong', 'CẬP NHẬT THÔNG TIN SẢN PHẨM THÀNH CÔNG');
    }

    public function upload(Request $request, $id)
    {
        $sanPhams = SanPham::find($id);

        $this->validate($request,
        [
            'anh_minh_hoa_san_pham' => 'required|max:255|image|mimes:jpeg,png,jpg'
        ],

        [
            'required'    => 'Vui Lòng Chọn :attribute',
            'max'         => ':attribute Chỉ Nhiều Nhất 255 Ký Tự',
            'image'       => ':attribute Phải Là Định Dạng Hình Ảnh',
            'mimes'       => ':attribute Phải Có Đuôi Mở Rộng Là JPEG, PNG Hoặc JPG'
        ],

        [
            'anh_minh_hoa_san_pham' => 'Ảnh Minh Họa Sản Phẩm'
        ]);

        if($request->hasFile('anh_minh_hoa_san_pham'))
        {
            $file = $request->file('anh_minh_hoa_san_pham');
            $filename = $file->store('');
            $file->move('images/product/', $filename);
        }
        $sanPhams->anh_minh_hoa_san_pham = $filename;
        $sanPhams->save();

        return redirect()->route('san-pham.cap-nhat', $sanPhams->id)->with('thongbaothanhcong', 'CẬP NHẬT HÌNH ẢNH SẢN PHẨM THÀNH CÔNG');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sanPhams = SanPham::find($id);
        $sanPhams->delete();

        return redirect()->route('san-pham.danh-sach')->with('thongbaothanhcong', 'XÓA SẢN PHẨM THÀNH CÔNG');
    }

    public function recycleBin()
    {
        $dsSanPham = SanPham::onlyTrashed()->get();
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.san-pham.khoi-phuc-san-pham', compact('dsSanPham', 'dsQuanTriVien'));
    }

    public function restore($id)
    {
        SanPham::withTrashed()->where('id', $id)->restore();

        return redirect()->route('san-pham.thung-rac')->with('thongbaothanhcong', 'KHÔI PHỤC SẢN PHẨM THÀNH CÔNG');
    }
}
