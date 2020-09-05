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
// HALAMAN COBA
Route::resource('coba', 'CobaController');


Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

// ADMIN
Route::group(['middleware' => ['auth:user']], function () {
    Route::get('/beranda', 'BerandaController@beranda')->name('beranda.admin');
    Route::resource('/user', 'UserController');
    // GURU
    Route::resource('/guru', 'GuruController');
    // TAHUN AKADEMIK
    Route::get('/tahun', 'TAController@index')->name('akademik.ta');
    Route::get('/tahun/create', 'TAController@create')->name('akademik.ta.create');
    Route::patch('/tahun/update', 'TAController@update')->name('akademik.ta.update');
    Route::post('/tahun/store', 'TAController@store')->name('akademik.ta.store');
    Route::get('/tahun/apply/{id}', 'TAController@apply')->name('akademik.ta.apply');
    Route::get('/tahun/delete/{id}', 'TAController@destroy')->name('akademik.ta.delete');
    // SISWA
    Route::resource('/siswa', 'SiswaController');
    // KELAS
    Route::resource('/kelas', 'KelasController');
    // MAPEL
    Route::resource('/mapel', 'MapelController');
    // SISWASKL
    Route::resource('/siswaskl', 'SiswasklController');
    // KATEGORI
    Route::resource('/kategori', 'KategoriController');
    // TAG
    Route::resource('/tag', 'TagController');
    // POST
    Route::get('/post/sampah', 'PostController@sampah')->name('post.sampah');
    Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
    Route::delete('/post/kill/{id}', 'PostController@kill')->name('post.kill');
    Route::resource('/post', 'PostController');
});
// GURU
Route::group(['middleware' => ['auth:guru']], function () {
    // MATERI
    Route::get('/gurumateri/sampah', 'MateriController@sampah')->name('gurumateri.sampah');
    Route::get('/gurumateri/restore/{id}', 'MateriController@restore')->name('gurumateri.restore');
    Route::delete('/gurumateri/kill/{id}', 'MateriController@kill')->name('gurumateri.kill');
    Route::resource('/gurumateri', 'MateriController');
    // END MATERI
    Route::get('/berandaguru', 'BerandaController@berandaguru')->name('beranda.guru');
    Route::get('/gurukelas', 'GuruController@gurukelas')->name('guru.kelas');
    Route::get('/gurukelas/create', 'GuruController@gurukelascreate')->name('guru.kelas.create');
    Route::post('/gurukelas/store', 'GuruController@gurukelasstore')->name('guru.kelas.store');
    Route::delete('/gurukelas/{id}/delete', 'GuruController@gurukelasdelete')->name('guru.kelas.delete');
});


// SISWA
Route::group(['middleware' => ['auth:user,guru,siswa']], function () {
    Route::get('/berandasiswa', 'BerandaController@berandasiswa')->name('beranda.siswa');
    Route::get('/siswa/materi/{slug}', 'MateriController@isi')->name('materi.isi');
    Route::post('/siswa/biodata/{id}/add', 'SiswaController@addbiodata')->name('siswa.addbiodata');
});


// SISWA SKL
Route::group(['middleware' => ['auth:user,siswaskl']], function () {
    Route::get('/berandasiswaskl', 'BerandaController@berandasiswaskl')->name('beranda.siswaskl');
});
