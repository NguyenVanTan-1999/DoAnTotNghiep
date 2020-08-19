<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/lay-thong-tin-Admin', 'QuanTriVienController@laythongtinAdmin');

Route::get('/dang-nhap-Admin', 'QuanTriVienController@dangnhapAdmin')->name('dang-nhap-admin')->middleware('guest');
Route::post('/dang-nhap-Admin', 'QuanTriVienController@xulydangnhapAdmin')->name('xu-ly-dang-nhap-admin');

Route::get('/dang-xuat-Admin', 'QuanTriVienController@dangxuatAdmin')->name('dang-xuat-admin');



Route::prefix('quan-tri')->group(function () {
	Route::middleware('auth:admin')->group(function () {
		Route::get('/', 'HomeAdminController@index')->name('trang-chu-admin');

		Route::get('/cap-nhat-Admin/{id}', 'QuanTriVienController@capnhatAdmin')->name('cap-nhat-admin');
		Route::post('/cap-nhat-Admin/{id}', 'QuanTriVienController@xulycapnhatAdmin')->name('xu-ly-cap-nhat-admin');
		Route::post('/cap-nhat-hinh-anh-Admin/{id}', 'QuanTriVienController@xulydangtaiAdmin')->name('cap-nhat-hinh-anh-admin');
		Route::post('/cap-nhat-mat-khau-Admin/{id}', 'QuanTriVienController@xulydoimatkhauAdmin')->name('thay-doi-mat-khau-admin');


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
				Route::post('/cap-nhat-hinh-anh/{id}', 'SanPhamController@upload')->name('cap-nhat-hinh-anh');

				Route::get('/xoa/{id}', 'SanPhamController@destroy')->name('xoa');

				Route::get('/thung-rac', 'SanPhamController@recycleBin')->name('thung-rac');

				Route::get('/khoi-phuc/{id}', 'SanPhamController@restore')->name('khoi-phuc');
			});
		});


		Route::prefix('tai-khoan')->group(function () {
			Route::name('tai-khoan.')->group(function () {
				Route::get('/lay-mat-khau-User', 'TaiKhoanController@laymatkhauUser');

				Route::get('/', 'TaiKhoanController@index')->name('danh-sach');

				Route::get('/them-moi', 'TaiKhoanController@create')->name('them-moi');
				Route::post('/them-moi', 'TaiKhoanController@store')->name('xu-ly-them-moi');

				Route::get('/cap-nhat/{id}', 'TaiKhoanController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}', 'TaiKhoanController@update')->name('xu-ly-cap-nhat');
				Route::post('/cap-nhat-hinh-anh/{id}', 'TaiKhoanController@upload')->name('cap-nhat-hinh-anh');
				Route::post('/cap-nhat-mat-khau/{id}', 'TaiKhoanController@changePassword')->name('thay-doi-mat-khau');

				Route::get('/xoa/{id}', 'TaiKhoanController@destroy')->name('xoa');

				Route::get('/thung-rac', 'TaiKhoanController@recycleBin')->name('thung-rac');

				Route::get('/khoi-phuc/{id}', 'TaiKhoanController@restore')->name('khoi-phuc');
			});
		});

		Route::prefix('slider')->group(function () {
			Route::name('slider.')->group(function () {
				Route::get('/', 'SliderController@index')->name('danh-sach');

				Route::get('/them-moi', 'SliderController@create')->name('them-moi');
				Route::post('/them-moi', 'SliderController@store')->name('xu-ly-them-moi');

				Route::get('/cap-nhat/{id}', 'SliderController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}', 'SliderController@update')->name('xu-ly-cap-nhat');

				Route::get('/xoa/{id}', 'SliderController@destroy')->name('xoa');

				Route::get('/thung-rac', 'SliderController@recycleBin')->name('thung-rac');

				Route::get('/khoi-phuc/{id}', 'SliderController@restore')->name('khoi-phuc');
			});
		});

		Route::prefix('banner')->group(function () {
			Route::name('banner.')->group(function () {
				Route::get('/', 'BannerController@index')->name('danh-sach');

				Route::get('/them-moi', 'BannerController@create')->name('them-moi');
				Route::post('/them-moi', 'BannerController@store')->name('xu-ly-them-moi');

				Route::get('/cap-nhat/{id}', 'BannerController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}', 'BannerController@update')->name('xu-ly-cap-nhat');

				Route::get('/xoa/{id}', 'BannerController@destroy')->name('xoa');

				Route::get('/thung-rac', 'BannerController@recycleBin')->name('thung-rac');

				Route::get('/khoi-phuc/{id}', 'BannerController@restore')->name('khoi-phuc');
			});
		});

		Route::prefix('hoa-don')->group(function () {
			Route::name('hoa-don.')->group(function () {
				Route::get('/', 'HoaDonController@index')->name('danh-sach');

				Route::get('/cap-nhat/{id}', 'HoaDonController@update')->name('xu-ly-cap-nhat');

				Route::get('/xoa/{id}', 'HoaDonController@destroy')->name('xoa');

				Route::get('/ds-da-duyet', 'HoaDonController@dsdaDuyet')->name('ds-da-duyet');

				Route::get('/thung-rac', 'HoaDonController@recycleBin')->name('thung-rac');

				Route::get('/khoi-phuc/{id}', 'HoaDonController@restore')->name('khoi-phuc');
			});
		});
	});
});
