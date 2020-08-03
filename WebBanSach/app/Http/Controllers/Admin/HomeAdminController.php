<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\QuanTriVien;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DangNhapRequest;
use App\Http\Requests\Admin\CapNhatQuanTriVienRequest;

class HomeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsQuanTriVien = QuanTriVien::all();
        return view('Admin.layout', compact('dsQuanTriVien'));
    }
}
