<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', 'HomeController@index');
Route::get('/dashboard', 'HomeController@index');

// route for mhs module
Route::get('/mhs', 'Mhs@index');
Route::get('/mhs_aktif', 'Mhs@mhs_aktif');
Route::get('/mhs_memenuhi_syarat', 'Mhs@mhs_memenuhi_syarat');
Route::get('/mhs_tidak_memenuhi_syarat', 'Mhs@mhs_tidak_memenuhi_syarat');
Route::get('/verifikasi_data_mhs', 'Mhs@verifikasi_data_mhs');
Route::get('/upload_data_mhs', 'Mhs@upload_data_mhs');
Route::get('/verifikasi_sukses', 'Mhs@mhs_memenuhi_syarat');
Route::get('/verifikasi_gagal', 'Mhs@mhs_tidak_memenuhi_syarat');


// route for dosen module
Route::get('/dosen', 'Dosen@index');
Route::get('/topik_ta_mhs', 'Dosen@topik_ta_mhs');
Route::get('/set_pembimbing_skripsi', 'Dosen@set_pembimbing_skripsi');


// route for sempro module
// Route::get('/dosen', 'Sempro@index')->name('index');
Route::get('/form_pengajuan_topik', 'Sempro@form_pengajuan_topik');
Route::get('/topik_ta', 'Sempro@topik_ta');
Route::get('/form_perubahan_topik', 'Sempro@form_perubahan_topik');
Route::get('/status_sempro', 'Sempro@status_sempro');
Route::get('/jadwal_sempro', 'Sempro@jadwal_sempro');
Route::get('/verifikasi_seminar', 'Sempro@verifikasi_seminar');
Route::get('/perpanjang_sempro', 'Sempro@perpanjang_sempro');
Route::get('/pendafataran_sempro', 'Sempro@pendafataran_sempro');
Route::get('/penguji_sempro', 'Sempro@penguji_sempro');

// route for kompre module
// Route::get('/dosen', 'Kompre@index')->name('index');
Route::get('/data_prasyarat_ta', 'Ta_2@data_prasyarat_ta');
Route::get('/status_skripsi', 'Ta_2@status_skripsi');
Route::get('/jadwal_skripsi', 'Ta_2@jadwal_skripsi');
Route::get('/verifikasi_skripsi', 'Ta_2@verifikasi_skripsi');
Route::get('/perpanjang_skripsi', 'Ta_2@perpanjang_skripsi');
Route::get('/pendaftaran_skripsi', 'Ta_2@pendaftaran_skripsi');
Route::get('/jadwal_penguji', 'Ta_2@jadwal_penguji');


// route for system module
Route::get('/user_account_list', 'System@index');
Route::get('/add_new_user', 'System@add_new_user');
Route::get('/user_group', 'System@user_group');
Route::get('/bidang_ilmu', 'System@bidang_ilmu');
Route::get('/angkatan', 'System@angkatan');
Route::get('/jurusan', 'System@jurusan');
Route::get('/profile', 'System@profile');
Route::get('/add_new_bidang_ilmu', 'System@add_new_bidang_ilmu');