<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TaiKhoan;
use App\SanPham;
use App\LoaiSanPham;
use App\NhaXuatBan;
use App\HinhThucSanPham;
use App\Slider;
use App\Banner;
use App\GioHang;
use App\HoaDon;
use App\ChiTietHoaDon;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Web\KhachHangDangKyRequest;
use App\Http\Requests\Web\KhachHangDangNhapRequest;
use App\Http\Requests\Web\KhachHangTaoHoaDonRequest;
use Hash;
use Session;
use App\Http\Controllers\Controller;

class HomeWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsLoaiSanPham         = LoaiSanPham::all();
        $dsHinhThucSanPham     = HinhThucSanPham::all();
        $dsNhaXuatBan          = NhaXuatBan::all();

        $Slider                = Slider::all();

        $Banner1               = Banner::where('id', '=', 1)->first();
        $Banner2               = Banner::where('id', '=', 2)->first();

        $sanphamMoi            = SanPham::where('hinh_thuc_san_pham_id', '=', 'HTSP001')->orderBy('id', 'desc')->get();
        $sanphambanChay        = SanPham::where('hinh_thuc_san_pham_id', '=', 'HTSP002')->orderBy('id', 'desc')->get();
        $sanphamgiamGia        = SanPham::where('hinh_thuc_san_pham_id', '=', 'HTSP004')->orderBy('id', 'desc')->get();

        $nhaxuatbanTre         = SanPham::where('nha_xuat_ban_id', '=', 'NXB001')->orderBy('id', 'desc')->get();
        $nhaxuatbanKimDong     = SanPham::where('nha_xuat_ban_id', '=', 'NXB002')->orderBy('id', 'desc')->get();

        $vanHoc                = SanPham::where('loai_san_pham_id', '=', 'LSP001')->orderBy('id', 'desc')->get();
        $kienthucbachKhoa      = SanPham::where('loai_san_pham_id', '=', 'LSP011')->orderBy('id', 'desc')->get();
        $tieuThuyet            = SanPham::where('loai_san_pham_id', '=', 'LSP013')->orderBy('id', 'desc')->get();
        return view('Web.home', compact('dsLoaiSanPham', 'dsHinhThucSanPham', 'dsNhaXuatBan', 'Slider', 'Banner1', 'Banner2', 'sanphamMoi', 'sanphambanChay', 'sanphamgiamGia', 'nhaxuatbanTre', 'nhaxuatbanKimDong', 'vanHoc', 'kienthucbachKhoa', 'tieuThuyet'));
    }

    public function dssanPham()
    {
        $dsLoaiSanPham         = LoaiSanPham::all();
        $dsHinhThucSanPham     = HinhThucSanPham::all();
        $dsNhaXuatBan          = NhaXuatBan::all();

        $dsHinhThucSanPhamLink = HinhThucSanPham::paginate(4);
        $dsLoaiSanPhamLink     = LoaiSanPham::paginate(4);
        $dsNhaXuatBanLink      = NhaXuatBan::paginate(4);

        $tongSanPham       = SanPham::all();
        $dsSanPhamGrid     = SanPham::orderBy('id', 'desc')->paginate(12);
        $dsSanPhamList     = SanPham::orderBy('id', 'desc')->paginate(4);
        return view('Web.product', compact('dsLoaiSanPham', 'dsHinhThucSanPham', 'dsNhaXuatBan', 'dsHinhThucSanPhamLink', 'dsLoaiSanPhamLink', 'dsNhaXuatBanLink', 'tongSanPham', 'dsSanPhamGrid', 'dsSanPhamList'));
    }

    public function sanPham($type)
    {
        $dsLoaiSanPham         = LoaiSanPham::all();
        $dsHinhThucSanPham     = HinhThucSanPham::all();
        $dsNhaXuatBan          = NhaXuatBan::all();

        $dsHinhThucSanPhamLink = HinhThucSanPham::paginate(4);
        $dsLoaiSanPhamLink     = LoaiSanPham::paginate(4);
        $dsNhaXuatBanLink      = NhaXuatBan::paginate(4);

        if(strpos($type, 'LSP') !== false)
        {
            $tongSanPham       = SanPham::where('loai_san_pham_id', $type)->get();
            $dsSanPhamGrid     = SanPham::where('loai_san_pham_id', $type)->orderBy('id', 'desc')->paginate(12);
            $dsSanPhamList     = SanPham::where('loai_san_pham_id', $type)->orderBy('id', 'desc')->paginate(4);
        }

        if(strpos($type, 'HTSP') !== false)
        {
            $tongSanPham       = SanPham::where('hinh_thuc_san_pham_id', $type)->get();
            $dsSanPhamGrid     = SanPham::where('hinh_thuc_san_pham_id', $type)->orderBy('id', 'desc')->paginate(12);
            $dsSanPhamList     = SanPham::where('hinh_thuc_san_pham_id', $type)->orderBy('id', 'desc')->paginate(4);
        }

        if(strpos($type, 'NXB') !== false)
        {
            $tongSanPham       = SanPham::where('nha_xuat_ban_id', $type)->get();
            $dsSanPhamGrid     = SanPham::where('nha_xuat_ban_id', $type)->orderBy('id', 'desc')->paginate(12);
            $dsSanPhamList     = SanPham::where('nha_xuat_ban_id', $type)->orderBy('id', 'desc')->paginate(4);
        }
        return view('Web.product', compact('dsLoaiSanPham', 'dsHinhThucSanPham', 'dsNhaXuatBan', 'dsHinhThucSanPhamLink', 'dsLoaiSanPhamLink', 'dsNhaXuatBanLink', 'tongSanPham', 'dsSanPhamGrid', 'dsSanPhamList'));
    }

    public function timKiem(Request $request)
    {
        $dsLoaiSanPham         = LoaiSanPham::all();
        $dsHinhThucSanPham     = HinhThucSanPham::all();
        $dsNhaXuatBan          = NhaXuatBan::all();

        $dsHinhThucSanPhamLink = HinhThucSanPham::paginate(4);
        $dsLoaiSanPhamLink     = LoaiSanPham::paginate(4);
        $dsNhaXuatBanLink      = NhaXuatBan::paginate(4);

        $tongsanphamtimKiem   = SanPham::where('ten_san_pham', 'like', '%'.$request->tu_khoa.'%')->get();
        $dssanphamtimkiemGrid = SanPham::where('ten_san_pham', 'like', '%'.$request->tu_khoa.'%')->orderBy('id', 'desc')->paginate(12);
        $dssanphamtimkiemList = SanPham::where('ten_san_pham', 'like', '%'.$request->tu_khoa.'%')->orderBy('id', 'desc')->paginate(4);
        return view('Web.search', compact('dsLoaiSanPham', 'dsHinhThucSanPham', 'dsNhaXuatBan', 'dsHinhThucSanPhamLink', 'dsLoaiSanPhamLink', 'dsNhaXuatBanLink', 'tongsanphamtimKiem', 'dssanphamtimkiemGrid', 'dssanphamtimkiemList'));
    }

    public function chitietsanPham(Request $request)
    {
        $dsLoaiSanPham         = LoaiSanPham::all();
        $dsHinhThucSanPham     = HinhThucSanPham::all();
        $dsNhaXuatBan          = NhaXuatBan::all();

        $sanPham               = SanPham::where('id', $request->id)->first();
        $sanphamtuongTu        = SanPham::where('loai_san_pham_id', $sanPham->loai_san_pham_id)->orderBy('id', 'desc')->get();
        return view('Web.product-details', compact('dsLoaiSanPham', 'dsHinhThucSanPham', 'dsNhaXuatBan', 'sanPham', 'sanphamtuongTu'));
    }

    public function themvaoGio(Request $request, $id)
    {
        $product = SanPham::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart    = new GioHang($oldCart);
        $cart->add($product, $id);
        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    public function xoagioHang($id)
    {
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart    = new GioHang($oldCart);
        $cart->removeItem($id);
        if(count($cart->items) > 0)
        {
            Session::put('cart', $cart);
        }
        else
        {
            Session::forget('cart');
        }

        return redirect()->back();
    }

    public function danhsachgioHang()
    {
        $dsLoaiSanPham         = LoaiSanPham::all();
        $dsHinhThucSanPham     = HinhThucSanPham::all();
        $dsNhaXuatBan          = NhaXuatBan::all();
        return view('Web.list-cart', compact('dsLoaiSanPham', 'dsHinhThucSanPham', 'dsNhaXuatBan'));
    }

    public function luadanhsachgioHang(Request $request, $id, $quanty)
    {
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart    = new GioHang($oldCart);
        $cart->UpdateItemCart($id, $quanty);
        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    public function datHang()
    {
        $dsLoaiSanPham     = LoaiSanPham::all();
        $dsHinhThucSanPham = HinhThucSanPham::all();
        $dsNhaXuatBan      = NhaXuatBan::all();
        return view('Web.checkout', compact('dsLoaiSanPham', 'dsHinhThucSanPham', 'dsNhaXuatBan'));
    }

    public function xulydatHang(KhachHangTaoHoaDonRequest $request)
    {
        $cart                             = Session::get('cart');

        $hoaDons                          = new HoaDon;
        $hoaDons->tai_khoan_id            = Auth::guard('web')->user()->id;
        $hoaDons->ten_nguoi_nhan          = $request->ten_nguoi_nhan;
        $hoaDons->ngay_mua                = date('Y-m-d');
        $hoaDons->dia_chi_giao_hang       = $request->dia_chi_giao_hang;
        $hoaDons->so_dien_thoai_giao_hang = $request->so_dien_thoai_giao_hang;
        $hoaDons->tong_tien               = $cart->totalPrice;
        $hoaDons->trang_thai              = false;
        $hoaDons->save();

        foreach($cart->items as $key => $value)
        {
            $chitiethoaDons                   = new ChiTietHoaDon;
            $chitiethoaDons->hoa_don_id       = $hoaDons->id;
            $chitiethoaDons->san_pham_id      = $key;
            $chitiethoaDons->so_luong         = $value['qty'];
            $chitiethoaDons->don_gia          = $value['price'] / $value['qty'];
            $chitiethoaDons->save();
        }

        Session::forget('cart');

        return redirect()->back()->with('thongbaothanhcong', 'TẠO HÓA ĐƠN THÀNH CÔNG');
    }

    public function dangKy()
    {
        $dsLoaiSanPham     = LoaiSanPham::all();
        $dsHinhThucSanPham = HinhThucSanPham::all();
        $dsNhaXuatBan      = NhaXuatBan::all();
        return view('Web.register', compact('dsLoaiSanPham', 'dsHinhThucSanPham', 'dsNhaXuatBan'));
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
        $dsLoaiSanPham     = LoaiSanPham::all();
        $dsHinhThucSanPham = HinhThucSanPham::all();
        $dsNhaXuatBan      = NhaXuatBan::all();
        return view('Web.login', compact('dsLoaiSanPham', 'dsHinhThucSanPham', 'dsNhaXuatBan'));
    }

    public function xulydangNhap(KhachHangDangNhapRequest $request)
    {
        $ten_tai_khoan = $request->ten_tai_khoan;
        $mat_khau      = $request->mat_khau;

        if(Auth::guard('web')->attempt(['ten_tai_khoan' => $ten_tai_khoan, 'password' => $mat_khau]))
        {
            return redirect()->route('website-ban-sach.trang-chu');
        }

        return redirect()->route('website-ban-sach.dang-nhap')->with('thongbaothatbai', 'ĐĂNG NHẬP TÀI KHOẢN THẤT BẠI');
    }

    public function laythongtinUser()
    {
        return Auth::guard('web')->user();
    }

    public function dangXuat()
    {
        Auth::guard('web')->logout();

        return redirect()->route('website-ban-sach.trang-chu');
    }
}
