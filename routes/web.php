<?php

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
    return view('user.home');
});

Auth::routes();
Route::get('/', 'User\HomeController@index')->name('user.home');
Route::get('/home', 'User\HomeController@index')->name('user.home');
Route::get('/about', 'User\AboutController@index')->name('user.about');
Route::get('/kadar-air-tanah', 'User\InformationController@kadarAir')->name('user.kadarAirTanah');
Route::get('/kecepatan-angin', 'User\InformationController@kecepatanAngin')->name('user.kecepatanAngin');
Route::get('/klasifikasi-tanah', 'User\InformationController@klasifikasiTanah')->name('user.klasifikasiTanah');
Route::get('/tutupan-lahan', 'User\InformationController@tutupanLahan')->name('user.tutupanLahan');
Route::get('/contoh-perhitungan', 'User\InformationController@contohPerhitungan')->name('user.contohPerhitungan');
Route::get('/persamaan', 'User\InformationController@persamaan')->name('user.persamaan');


//--------Admin--------
Route::get('/admin', 'Admin\IndexController@index')->name('admin.index');
Route::get('/admin/dapus', 'Admin\IndexController@dapus')->name('admin.dapus');
Route::get('/admin/deskripsi', 'Admin\IndexController@deskripsi')->name('admin.deskripsi');