<?php
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;

Route::prefix('app/v1')->group(function () {
    Route::apiResource('/clientes', ClienteController::class);
    Route::apiResource('/inventario', InventarioController::class);
    Route::apiResource('/ventas', VentaController::class);
});
