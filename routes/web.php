<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RakBukuController;
use App\Http\Controllers\LoginRegisterController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/coba/{id}', function (string $id) {
    return view('coba', ['id' => $id]);
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::post('/biodata', function (Request $request) {
    $output = "Nama: $request->nama. <br> Email: $request->email. <br> No. Hp: $request->no_hp.";
    return $output;
});

Route::get('/buku', function () {
    $data = [];
    $data['poin'] = 89;
    $data['flag'] = '2';
    $data['sub_judul'] = 'latihan parsing data di view';
    $data['buku'] = ['buku 1', 'buku 2', 'buku 3', 'buku 4', 'buku 5'];
    return view('buku/list', $data);
});

Route::resource('rak_buku', RakBukuController::class);
Route::controller(LoginRegisterController::class)->group(function() { 
    Route::get('/register', 'register')->name('register'); 
    Route::post('/store', 'store')->name('store'); 
    Route::get('/login', 'login')->name('login'); 
    Route::post('/authenticate', 'authenticate')->name('authenticate'); 
    Route::get('/dashboard', 'dashboard')->name('dashboard'); 
    Route::post('/logout', 'logout')->name('logout'); 
});
Route::post('/rak_buku/ajax_store',[RakBukuController::class, 'ajax_store']);
