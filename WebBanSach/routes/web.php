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

//Route Admin
Route::get('/lay-thong-tin-Admin', 'QuanTriVienController@laythongtinAdmin');
Route::get('/dang-nhap-Admin', 'QuanTriVienController@dangnhapAdmin')->name('dang-nhap-admin');
Route::post('/dang-nhap-Admin', 'QuanTriVienController@xulydangnhapAdmin')->name('xu-ly-dang-nhap-admin');
Route::get('/dang-xuat-Admin', 'QuanTriVienController@dangxuatAdmin')->name('dang-xuat-admin');


Route::prefix('quan-tri')->group(function () {
	Route::middleware('auth')->group(function () {
		Route::get('/', 'HomeAdminController@index')->name('trang-chu-admin');

		Route::prefix('loai-san-pham')->group(function () {
			Route::name('loai-san-pham.')->group(function () {
				Route::get('/', 'LoaiSanPhamController@index')->name('danh-sach');
				Route::get('/them-moi', 'LoaiSanPhamController@create')->name('them-moi');
			});
		});
	});
});





//Route Web
Route::get('/', 'HomeController@index')->name('trang-chu');
