<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/inicio','inicio')->name('inicio');

Route::view('/ventas','ventas')->name('ventas');

Route::view('/movimientos','movimientos')->name('movimientos');

Route::view('/doctor','doctor')->name('doctor');

Route::view('/antibioticos','antibioticos')->name('antibioticos');

Route::view('/catalogo','catalogo')->name('catalogo');