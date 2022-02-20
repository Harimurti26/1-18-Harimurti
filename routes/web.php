<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "nama" => "Harimurti Satrio Tomo",
        "email" => "harimurtisatriotomo@gmail.com",
        "gambar" => "gamerman.png"
    ]);
});

Route::get('/gallery', function () {
    return view('Gallery', [
        "title" => "Gallery"
    ]);
});

?>