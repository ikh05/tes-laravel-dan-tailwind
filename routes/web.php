<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;


Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'Home'
    ]);
});

Route::get('/about', function(){
    return view('about', [
        'title' => 'About',
        'active' => 'About'
    ]);
});


Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/detail/{guru:username}', [GuruController::class, 'detail']);
// Route::get('/guru/login', [GuruController::class, 'login']);
// Route::post('/guru/login', [GuruController::class, 'login']);


Route::get('/kelas/detail/{kelas:slug}', [KelasController::class, 'detail']);

Route::get('/dd', function(){
    return view('dd', [
        
    ]);
});