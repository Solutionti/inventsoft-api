<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NotasController;
use App\Http\Controllers\InventariosController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\GastosController;
use App\Http\Controllers\DevolucionesController;
use App\Http\Controllers\ReportesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//SERVICIO PARA LAS NOTAS
Route::controller(NotasController::class)->group(function() {
  Route::get('getallnotas','getAllNotas');
});

//SERVICIO PARA LOS INVENTARIOS
Route::controller(InventariosController::class)->group(function () {
  
});

//SERVICIOS PARA LAS VENTAS
Route::controller(VentasController::class)->group(function () {
  
});

//SERVICIOS PARA LOS GASTOS
Route::controller(GastosController::class)->group(function () {
  
});

//SERVICIOS PARA LAS DEVOLUCIONES
Route::controller(DevolucionesController::class)->group(function () {
  
});

//SERVICIOS PARA LAS REPORTES
Route::controller(ReportesController::class)->group(function () {
  
});