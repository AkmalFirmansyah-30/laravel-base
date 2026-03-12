<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar-route',function(){
    return "Selamat Datang Di Halaman Belajar-Route";
});

Route::match(['get','post'], 'belajar-route', function(){
    return "Ini Halaman belajar-route";
});

Route::redirect('route','new-route');

Route::get('new-route', function() {
    return "Ini Halaman Route Baru";
});

Route::get('/belajar-route/{page}', function($page){
    return "Hello, Ini Halaman Belajar Route $page";
});