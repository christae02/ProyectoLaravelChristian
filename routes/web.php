<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DireccionesController;
use App\Http\Controllers\MovimientosController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\ExistenciaController;
use App\Http\Controllers\MedicamentoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// INICIO

Route::get('/inicio',[MovimientosController::class,'index'])
    ->name('movimientos.index');

Route::get('/inicio/busqueda',[MovimientosController::class,'search'])
    ->name('movimientos.search');

// CATALOGO

Route::get('/catalogo',[ExistenciaController::class,'index'])
    ->name('catalogo.index');


// DOCTOR

Route::get('/doctor',[DoctorController::class,'index'])
    ->name('doctor.index');

Route::get('/doctor/crear',[DoctorController::class,'create'])
    ->name('doctor.create');

Route::get('/doctor/{id}',[DoctorController::class,'show'])
    ->name('doctor.show');

Route::post('/doctor/store',[DoctorController::class,'store'])
    ->name('doctor.store');

Route::view('/doctor/choice','doctor.choice')->name('doctor.choice');

// DIRECCIONES

Route::get('/doctor/direcciones/crear/{id}',[DireccionesController::class,'create'])
    ->name('doctor.direcciones.create');

Route::post('/doctor/direcciones/store',[DireccionesController::class,'store'])
    ->name('doctor.direcciones.store');

// ANTIBIOTICOS

Route::get('/antibioticos',[MedicamentoController::class,'index'])
    ->name('antibioticos.index');

Route::get('/antibioticos/crear',[MedicamentoController::class,'create'])
    ->name('antibioticos.create');

Route::post('/antibioticos/store',[MedicamentoController::class,'store'])
    ->name('antibioticos.store');

Route::view('/antibioticos/choice','antibioticos.choice')->name('antibioticos.choice');

Route::get('/antibioticos/{id}',[MedicamentoController::class,'show'])
    ->name('antibioticos.show');

Route::get('/antibioticos/edit/{id}',[MedicamentoController::class,'edit'])
    ->name('antibioticos.edit');

Route::post('/antibioticos/update/{id}',[MedicamentoController::class,'update'])
    ->name('antibioticos.update');

// EXISTENCIAS

Route::get('/antibioticos/existencia/create/{id}',[ExistenciaController::class,'create'])
    ->name('antibioticos.existencia.create');

Route::get('/antibioticos/existencia/{id}',[ExistenciaController::class,'show'])
    ->name('antibioticos.existencia.show');

Route::post('/antibioticos/existencia/store',[ExistenciaController::class,'store'])
    ->name('antibioticos.existencia.store');

Route::get('/antibioticos/existencia/edit/{id}',[ExistenciaController::class,'edit'])
    ->name('antibioticos.existencia.edit');

Route::post('/antibioticos/existencia/update/{id}',[ExistenciaController::class,'update'])
    ->name('antibioticos.existencia.update');

Route::get('/antibioticos/existencia/editCantidad/{id}',[ExistenciaController::class,'editCantidad'])
    ->name('antibioticos.existencia.editCantidad');

Route::post('/antibioticos/existencia/updateCantidad/{id}',[ExistenciaController::class,'updateCantidad'])
    ->name('antibioticos.existencia.updateCantidad');