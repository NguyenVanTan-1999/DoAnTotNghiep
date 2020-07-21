<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\NhaXuatBan;
use App\Http\Requests\ThemMoiNhaXuatBanRequest;
use App\Http\Requests\CapNhatNhaXuatBanRequest;

class NhaXuatBanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsNhaXuatBan = NhaXuatBan::all();
        return view('Admin.nha-xuat-ban.ds-nha-xuat-ban', compact('dsNhaXuatBan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.nha-xuat-ban.them-moi-nha-xuat-ban');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThemMoiNhaXuatBanRequest $request)
    {
        $manxb = "NXB";

        $nhaxuatBans = new NhaXuatBan;
        $nhaxuatBans->ma_nha_xuat_ban  = $manxb.$request->ma_nha_xuat_ban;
        $nhaxuatBans->ten_nha_xuat_ban = $request->ten_nha_xuat_ban;
        $nhaxuatBans->dia_chi_nha_xuat_ban = $request->dia_chi_nha_xuat_ban;
        $nhaxuatBans->website_nha_xuat_ban = $request->website_nha_xuat_ban;
        $nhaxuatBans->email_nha_xuat_ban = $request->email_nha_xuat_ban;
        $nhaxuatBans->so_dien_thoai_nha_xuat_ban = $request->so_dien_thoai_nha_xuat_ban;
        $nhaxuatBans->save();

        return redirect()->route('nha-xuat-ban.them-moi')->with('thongbaothanhcong', 'THÊM MỚI NHÀ XUẤT BẢN THÀNH CÔNG');
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
        $nhaxuatBans = NhaXuatBan::find($id);
        return view('Admin.nha-xuat-ban.cap-nhat-nha-xuat-ban', compact('nhaxuatBans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CapNhatNhaXuatBanRequest $request, $id)
    {
        $nhaxuatBans = NhaXuatBan::find($id);
        $nhaxuatBans->ten_nha_xuat_ban = $request->ten_nha_xuat_ban;
        $nhaxuatBans->dia_chi_nha_xuat_ban = $request->dia_chi_nha_xuat_ban;
        $nhaxuatBans->website_nha_xuat_ban = $request->website_nha_xuat_ban;
        $nhaxuatBans->email_nha_xuat_ban = $request->email_nha_xuat_ban;
        $nhaxuatBans->so_dien_thoai_nha_xuat_ban = $request->so_dien_thoai_nha_xuat_ban;
        $nhaxuatBans->save();

        return redirect()->route('nha-xuat-ban.cap-nhat', $nhaxuatBans->id)->with('thongbaothanhcong', 'CẬP NHẬT NHÀ XUẤT BẢN THÀNH CÔNG');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nhaxuatBans = NhaXuatBan::find($id);
        $nhaxuatBans->delete();

        return redirect()->route('nha-xuat-ban.danh-sach')->with('thongbaothanhcong', 'XÓA NHÀ XUẤT BẢN THÀNH CÔNG');
    }

    public function recycleBin()
    {
        $dsNhaXuatBan = NhaXuatBan::onlyTrashed()->get();
        return view('Admin.nha-xuat-ban.khoi-phuc-nha-xuat-ban', compact('dsNhaXuatBan'));
    }

    public function restore($id)
    {
        NhaXuatBan::withTrashed()->where('id', $id)->restore();
        
        return redirect()->route('nha-xuat-ban.thung-rac')->with('thongbaothanhcong', 'KHÔI PHỤC NHÀ XUẤT BẢN THÀNH CÔNG');
    }
}
