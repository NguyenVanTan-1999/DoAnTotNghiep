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

		Route::get('/dang-ky', 'HomeWebController@dangKy')->name('dang-ky');
		Route::post('/dang-ky', 'HomeWebController@xulydangKy')->name('xu-ly-dang-ky');

		Route::get('/dang-nhap', 'HomeWebController@dangNhap')->name('dang-nhap');
		Route::post('/dang-nhap', 'HomeWebController@xulydangNhap')->name('xu-ly-dang-nhap');

		Route::get('/dang-xuat', 'HomeWebController@dangXuat')->name('dang-xuat');
	});
});
