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

Route::get('/', function () {
    return view('Admin/layout');
})->name('trang-chu');


Route::prefix('loai-san-pham')->group(function () {
	Route::name('loai-san-pham.')->group(function () {

		Route::get('/', function () {
		    return view('Admin/ds-loai-san-pham');
		})->name('danh-sach');

		Route::get('/them-moi', function () {
		    return view('Admin/them-moi-loai-san-pham');
		})->name('them-moi');

	});
});
