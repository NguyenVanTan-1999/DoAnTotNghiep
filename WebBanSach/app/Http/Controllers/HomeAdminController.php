<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\QuanTriVien;

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
