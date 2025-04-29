<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function(){
    $nombre='Guillermo Calderon';
    $departamento="San Salvador";
    return view('prueba', compact('nombre','departamento'));
    
});

