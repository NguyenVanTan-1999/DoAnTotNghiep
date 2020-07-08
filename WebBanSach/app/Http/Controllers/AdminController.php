<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dangnhapAdmin()
    {
        return view ('Admin.login');
    }

    public function xulydangnhapAdmin(Request $request)
    {
        return "OK";
    }
}
