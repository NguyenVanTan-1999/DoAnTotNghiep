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
Route::get('/dang-nhap-Admin', 'QuanTriVienController@dangnhapAdmin')->name('dang-nhap-admin')->middleware('guest');
Route::post('/dang-nhap-Admin', 'QuanTriVienController@xulydangnhapAdmin')->name('xu-ly-dang-nhap-admin');
Route::get('/dang-xuat-Admin', 'QuanTriVienController@dangxuatAdmin')->name('dang-xuat-admin');


Route::prefix('quan-tri')->group(function () {
	Route::middleware('auth')->group(function () {
		Route::get('/', 'HomeAdminController@index')->name('trang-chu-admin');

		Route::prefix('loai-san-pham')->group(function () {
			Route::name('loai-san-pham.')->group(function () {
				Route::get('/', 'LoaiSanPhamController@index')->name('danh-sach');
				Route::get('/them-moi', 'LoaiSanPhamController@create')->name('them-moi');
				Route::post('/them-moi', 'LoaiSanPhamController@store')->name('xu-ly-them-moi');
				Route::get('/cap-nhat/{id}', 'LoaiSanPhamController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}', 'LoaiSanPhamController@update')->name('xu-ly-cap-nhat');
				Route::get('/xoa/{id}', 'LoaiSanPhamController@destroy')->name('xoa');
				Route::get('/thung-rac', 'LoaiSanPhamController@recycleBin')->name('thung-rac');
				Route::get('/khoi-phuc/{id}', 'LoaiSanPhamController@restore')->name('khoi-phuc');
			});
		});

		Route::prefix('hinh-thuc-san-pham')->group(function () {
			Route::name('hinh-thuc-san-pham.')->group(function () {
				Route::get('/', 'HinhThucSanPhamController@index')->name('danh-sach');
				Route::get('/them-moi', 'HinhThucSanPhamController@create')->name('them-moi');
				Route::post('/them-moi', 'HinhThucSanPhamController@store')->name('xu-ly-them-moi');
				Route::get('/cap-nhat/{id}', 'HinhThucSanPhamController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}', 'HinhThucSanPhamController@update')->name('xu-ly-cap-nhat');
				Route::get('/xoa/{id}', 'HinhThucSanPhamController@destroy')->name('xoa');
				Route::get('/thung-rac', 'HinhThucSanPhamController@recycleBin')->name('thung-rac');
				Route::get('/khoi-phuc/{id}', 'HinhThucSanPhamController@restore')->name('khoi-phuc');
			});
		});

		Route::prefix('nha-xuat-ban')->group(function () {
			Route::name('nha-xuat-ban.')->group(function () {
				Route::get('/', 'NhaXuatBanController@index')->name('danh-sach');
				Route::get('/them-moi', 'NhaXuatBanController@create')->name('them-moi');
				Route::post('/them-moi', 'NhaXuatBanController@store')->name('xu-ly-them-moi');
				Route::get('/cap-nhat/{id}', 'NhaXuatBanController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}', 'NhaXuatBanController@update')->name('xu-ly-cap-nhat');
				Route::get('/xoa/{id}', 'NhaXuatBanController@destroy')->name('xoa');
				Route::get('/thung-rac', 'NhaXuatBanController@recycleBin')->name('thung-rac');
				Route::get('/khoi-phuc/{id}', 'NhaXuatBanController@restore')->name('khoi-phuc');
			});
		});

		Route::prefix('san-pham')->group(function () {
			Route::name('san-pham.')->group(function () {
				Route::get('/', 'SanPhamController@index')->name('danh-sach');
				Route::get('/them-moi', 'SanPhamController@create')->name('them-moi');
				Route::post('/them-moi', 'SanPhamController@store')->name('xu-ly-them-moi');
				Route::get('/cap-nhat/{id}', 'SanPhamController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}', 'SanPhamController@update')->name('xu-ly-cap-nhat');
				Route::get('/xoa/{id}', 'SanPhamController@destroy')->name('xoa');
				Route::get('/thung-rac', 'SanPhamController@recycleBin')->name('thung-rac');
				Route::get('/khoi-phuc/{id}', 'SanPhamController@restore')->name('khoi-phuc');
			});
		});
	});
});





//Route Web
Route::get('/', 'HomeWebController@index')->name('trang-chu');
