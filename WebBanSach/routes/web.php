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


		Route::get('/san-pham', 'HomeWebController@dssanPham')->name('ds-san-pham');
		Route::get('/san-pham/{type}', 'HomeWebController@sanPham')->name('san-pham');


		Route::get('/chi-tiet-san-pham/{id}', 'HomeWebController@chitietsanPham')->name('chi-tiet-san-pham');


		Route::get('/tim-kiem', 'HomeWebController@timKiem')->name('tim-kiem');
		Route::get('/tim-kiem-gia-tang-dan', 'HomeWebController@timkiemtangDan')->name('tim-kiem-tang-dan');
		Route::get('/tim-kiem-gia-giam-dan', 'HomeWebController@timkiemgiamDan')->name('tim-kiem-giam-dan');
		Route::get('/tim-kiem-gia-pt1', 'HomeWebController@timkiemgiaPt1')->name('tim-kiem-pt1');
		Route::get('/tim-kiem-gia-pt2', 'HomeWebController@timkiemgiaPt2')->name('tim-kiem-pt2');
		Route::get('/tim-kiem-gia-pt3', 'HomeWebController@timkiemgiaPt3')->name('tim-kiem-pt3');
		Route::get('/tim-kiem-gia-pt4', 'HomeWebController@timkiemgiaPt4')->name('tim-kiem-pt4');
		Route::get('/tim-kiem-gia-pt5', 'HomeWebController@timkiemgiaPt5')->name('tim-kiem-pt5');


		Route::get('/them-vao-gio/{id}', 'HomeWebController@themvaoGio')->name('them-vao-gio');


		Route::get('/luu-ds-gio-hang/{id}/{quanty}', 'HomeWebController@luadanhsachgioHang')->name('luu-ds-gio-hang');


		Route::get('/xoa-gio-hang/{id}', 'HomeWebController@xoagioHang')->name('xoa-gio-hang');


		Route::get('/danh-sach-gio-hang', 'HomeWebController@danhsachgioHang')->name('danh-sach-gio-hang');


		Route::get('/dat-hang', 'HomeWebController@datHang')->name('dat-hang');
		Route::post('/dat-hang', 'HomeWebController@xulydatHang')->name('xu-ly-dat-hang');


		Route::get('/dang-ky', 'HomeWebController@dangKy')->name('dang-ky');
		Route::post('/dang-ky', 'HomeWebController@xulydangKy')->name('xu-ly-dang-ky');


		Route::get('/dang-nhap', 'HomeWebController@dangNhap')->name('dang-nhap');
		Route::post('/dang-nhap', 'HomeWebController@xulydangNhap')->name('xu-ly-dang-nhap');


		Route::get('/dang-xuat', 'HomeWebController@dangXuat')->name('dang-xuat');
	});
});
