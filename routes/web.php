<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nombre = 'Mtguti';
    return view('home', compact('nombre'));
});

