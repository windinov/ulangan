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
    return view('welcome');
});
Route::get('/testmodel', function () {
	$query=App\posts::all();
	return $query;
});

//menampilkan semua isi table posts
Route::get('/testmodel2', function () {
	$query=App\posts::find(1);
	return $query;
});

//menampilkan isi table dengan id 1
Route::get('/testmodel3', function () {
	$query=App\posts::where('title','like','%cepat nikah%')->get();
	return $query;
});

Route::get('/testmodel4', function () {
	$query=App\posts::find(1);
	$query->title = "Ciri Keluarga Sakinah";
	$query->save();
	return $query;
});

Route::get('/testsiswa', function () {
	$query=App\siswa::all();
	return $query;
});