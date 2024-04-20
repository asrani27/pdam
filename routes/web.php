<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/logout', 'LoginController@logout');
Route::get('/', 'LoginController@loginhome');
Route::post('/login', 'LoginController@login');
Route::get('/login', 'LoginController@loginhome')->name('login');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/rekanan', 'RekananController@index');
    Route::get('/rekanan/add', 'RekananController@add');
    Route::get('/rekanan/edit/{id}', 'RekananController@edit');
    Route::get('/rekanan/delete/{id}', 'RekananController@delete');
    Route::post('/rekanan/add', 'RekananController@save')->name('rekanan');
    Route::post('/rekanan/edit/{id}', 'RekananController@update')->name('editrekanan');

    Route::get('/pengguna', 'PenggunaController@index');
    Route::get('/pengguna/add', 'PenggunaController@add');
    Route::get('/pengguna/edit/{id}', 'PenggunaController@edit');
    Route::get('/pengguna/delete/{id}', 'PenggunaController@delete');
    Route::post('/pengguna/add', 'PenggunaController@save')->name('pengguna');
    Route::post('/pengguna/edit/{id}', 'PenggunaController@update')->name('editpengguna');

    Route::get('/teknisi', 'TeknisiController@index');
    Route::get('/teknisi/add', 'TeknisiController@add');
    Route::get('/teknisi/edit/{id}', 'TeknisiController@edit');
    Route::get('/teknisi/delete/{id}', 'TeknisiController@delete');
    Route::post('/teknisi/add', 'TeknisiController@save')->name('teknisi');
    Route::post('/teknisi/edit/{id}', 'TeknisiController@update')->name('editteknisi');

    Route::get('/departemen', 'DepartemenController@index');
    Route::get('/departemen/add', 'DepartemenController@add');
    Route::get('/departemen/edit/{id}', 'DepartemenController@edit');
    Route::get('/departemen/delete/{id}', 'DepartemenController@delete');
    Route::post('/departemen/add', 'DepartemenController@save')->name('departemen');
    Route::post('/departemen/edit/{id}', 'DepartemenController@update')->name('editdepartemen');

    Route::get('/infrastruktur', 'InfrastrukturController@index');
    Route::get('/infrastruktur/add', 'InfrastrukturController@add');
    Route::get('/infrastruktur/edit/{id}', 'InfrastrukturController@edit');
    Route::get('/infrastruktur/delete/{id}', 'InfrastrukturController@delete');
    Route::post('/infrastruktur/add', 'InfrastrukturController@save')->name('infrastruktur');
    Route::post('/infrastruktur/edit/{id}', 'InfrastrukturController@update')->name('editinfrastruktur');

    Route::get('/perawatan', 'PerawatanController@index');
    Route::get('/perawatan/add', 'PerawatanController@add');
    Route::get('/perawatan/edit/{id}', 'PerawatanController@edit');
    Route::get('/perawatan/delete/{id}', 'PerawatanController@delete');
    Route::post('/perawatan/add', 'PerawatanController@save')->name('perawatan');
    Route::post('/perawatan/edit/{id}', 'PerawatanController@update')->name('editperawatan');

    Route::get('/jadwal', 'JadwalController@index');
    Route::get('/jadwal/add', 'JadwalController@add');
    Route::get('/jadwal/edit/{id}', 'JadwalController@edit');
    Route::get('/jadwal/delete/{id}', 'JadwalController@delete');
    Route::post('/jadwal/add', 'JadwalController@save')->name('jadwal');
    Route::post('/jadwal/edit/{id}', 'JadwalController@update')->name('editjadwal');


    Route::get('/hasil', 'HasilController@index');
    Route::get('/hasil/add', 'HasilController@add');
    Route::get('/hasil/edit/{id}', 'HasilController@edit');
    Route::get('/hasil/delete/{id}', 'HasilController@delete');
    Route::post('/hasil/add', 'HasilController@save')->name('hasil');
    Route::post('/hasil/edit/{id}', 'HasilController@update')->name('edithasil');

    Route::get('/serahterima', 'SerahTerimaController@index');
    Route::get('/serahterima/add', 'SerahTerimaController@add');
    Route::get('/serahterima/edit/{id}', 'SerahTerimaController@edit');
    Route::get('/serahterima/delete/{id}', 'SerahTerimaController@delete');
    Route::post('/serahterima/add', 'SerahTerimaController@save')->name('serahterima');
    Route::post('/serahterima/edit/{id}', 'SerahTerimaController@update')->name('editserahterima');


    Route::get('/pemusnahan', 'PemusnahanController@index');
    Route::get('/pemusnahan/add', 'PemusnahanController@add');
    Route::get('/pemusnahan/edit/{id}', 'PemusnahanController@edit');
    Route::get('/pemusnahan/delete/{id}', 'PemusnahanController@delete');
    Route::post('/pemusnahan/add', 'PemusnahanController@save')->name('pemusnahan');
    Route::post('/pemusnahan/edit/{id}', 'PemusnahanController@update')->name('editpemusnahan');

    Route::get('/user', 'UserController@index');
    Route::get('/user/add', 'UserController@add');
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::get('/user/delete/{id}', 'UserController@delete');
    Route::post('/user/add', 'UserController@save')->name('user');
    Route::post('/user/edit/{id}', 'UserController@update')->name('edituser');

    Route::get('/laporan', 'LaporanController@index');
    Route::get('/laporan/departemen', 'LaporanController@departemen');
    Route::get('/laporan/teknisi', 'LaporanController@teknisi');
    Route::get('/laporan/pengguna', 'LaporanController@pengguna');
    Route::get('/laporan/rekanan', 'LaporanController@rekanan');
    Route::get('/laporan/infrastruktur', 'LaporanController@infrastruktur');

    Route::get('/laporan/periode', 'LaporanController@periode');
});
