<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('website-ban-sach')->group(function () {
	Route::name('website-ban-sach.')->group(function () {
		Route::get('/lay-thong-tin-User', 'HomeWebController@laythongtinUser');

		Route::get('/', 'HomeWebController@index')->name('trang-chu');

		Route::get('/san-pham/{type}', 'HomeWebController@sanPham')->name('san-pham');
		Route::get('/chi-tiet-san-pham/{id}', 'HomeWebController@chitietsanPham')->name('chi-tiet-san-pham');

		Route::get('/tim-kiem', 'HomeWebController@timKiem')->name('tim-kiem');

		Route::get('/them-vao-gio/{id}', 'HomeWebController@themvaoGio')->name('them-vao-gio');

		Route::get('/xoa-gio-hang/{id}', 'HomeWebController@xoagioHang')->name('xoa-gio-hang');

		Route::get('/danh-sach-gio-hang', 'HomeWebController@danhsachgioHang')->name('danh-sach-gio-hang');

		Route::get('/luu-ds-gio-hang/{id}/{quanty}', 'HomeWebController@luadanhsachgioHang')->name('luu-ds-gio-hang');

		Route::get('/dang-ky', 'HomeWebController@dangKy')->name('dang-ky');
		Route::post('/dang-ky', 'HomeWebController@xulydangKy')->name('xu-ly-dang-ky');

		Route::get('/dang-nhap', 'HomeWebController@dangNhap')->name('dang-nhap');
		Route::post('/dang-nhap', 'HomeWebController@xulydangNhap')->name('xu-ly-dang-nhap');

		Route::get('/dang-xuat', 'HomeWebController@dangXuat')->name('dang-xuat');
	});
});
