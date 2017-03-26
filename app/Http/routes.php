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

// Route::get('pengguna/{pengguna}', function ($pengguna) {
// 	return "Hello $pengguna"; //route parameter

 // Route::get('pengguna/{pengguna?}', function ($pengguna="semuaaaa") {
 // 	return "Hello $pengguna"; //optional route parameter});
Route::get('/', function()
{
	return view('Welcome');
});

Route::get('pengguna/lihat/{pengguna}','penggunaController@lihat');
Route::post('pengguna/simpan','penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','penggunaController@edit');
Route::post('pengguna/edit/{pengguna}','penggunaController@update');
Route::get('pengguna/hapus/{pengguna}','penggunaController@hapus');

Route::get('matakuliah/lihat/{matakuliah}','matakuliahController@lihat');
Route::post('matakuliah/simpan','matakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','matakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','matakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','penggunaController@hapus');

Route::get('ruangan/lihat/{ruangan}','ruanganController@lihat');
Route::post('ruangan/simpan','ruanganController@simpan');
Route::get('ruangan/edit/{ruangan}','ruanganController@edit');
Route::post('ruangan/edit/{ruangan}','ruanganController@update');
Route::get('ruangan/hapus/{ruangan}','penggunaController@hapus');


Route::get('pengguna','penggunaController@awal');
Route::get('pengguna/tambah','penggunaController@tambah');
Route::get('pengguna/noona',function() // tugas yang enda dapat point
    {
    	$pengguna = new App\pengguna();
    	$pengguna->username = 'nonik';
    	$pengguna->password = 'nonik';
    	$pengguna->save();
    	return "data dengan username {$pengguna->username} telah disimpan";
    });

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');

Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');

Route::get('jadwal_matakuliah','Jadwal_matakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_matakuliahController@tambah');

Route::get('dosen_matakuliah','Dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambah','Dosen_matakuliahController@tambah');







