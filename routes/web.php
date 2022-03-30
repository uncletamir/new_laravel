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
    return view('pengguna.login');
});

Route::get('/login', function(){
  return view('pengguna.login');
})->name('login');

Route::post('/postlogin', 'logincontroller@postlogin')->name('postlogin');
Route::get('/logout', 'logincontroller@logout')->name('logout');
Route::resource('register', 'RegisterController');

// Route::group(['middleware' => ['auth', 'ceklevel:admin']], function() {
//   Route::resource('home', 'HomeController');
//   Route::resource('buku', 'BukuController');
// });

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
  Route::resource('home', 'HomeController');
  // Route::get('/home', 'HomeController@index');
  Route::get('/halaman-satu', 'HomeController@halamansatu')->name('halaman-satu');
  Route::resource('buku', 'BukuController');
  Route::resource('kategori', 'KategoriController');
  Route::resource('user', 'UserController');
  Route::resource('profile', 'ProfileController');
  Route::resource('peminjaman', 'PeminjamanController');
  Route::resource('pengajuan', 'PengajuanController');
  // Route::get('/tambah-buku', 'BukuController@create')->name('tambah-buku');
  // Route::post('/simpan-buku', 'BukuController@store')->name('simpan-buku');
  // Route::get('/edit-buku/{$id}', 'BukuController@edit')->name('edit-buku');
  // Route::get('/data-buku', 'BukuController@index')->name('data-buku');
  //
  // Route::get('/data-buku', 'BukuController@index')->name('data-buku');
  // Route::post('/edit-buku/{$id}', 'BukuController@update')->name('edit-buku');


});

Route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function () {
  Route::resource('home', 'HomeController');
  Route::resource('profile', 'ProfileController');
  // Route::get('/home', 'HomeController@index');
  Route::resource('buku', 'BukuController');

  // Route::get('/data-buku', 'BukuController@index')->name('data-buku');
  Route::get('/halaman-dua', 'HomeController@halamandua')->name('halaman-dua');
});
