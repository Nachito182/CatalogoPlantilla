<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/comprar', function(){
    return view('comprar');
});
  
Route::get('/carrito', function(){
    return view('carrito');
});

Route::get('/producto', function(){
    return view('producto');
});