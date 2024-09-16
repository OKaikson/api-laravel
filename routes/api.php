<?php

use App\Http\Controllers\Api\V1\CargoController;
use App\Http\Controllers\Api\V1\PessoaController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){
    Route::get('/pessoas', [PessoaController::class, 'index']);
    Route::get('/pessoas/{pessoa}', [PessoaController::class, 'show']);

    Route::get('/cargos', [CargoController::class, 'index']);
    Route::get('/cargos/{cargo}', [CargoController::class, 'show']);
});


// Route::apiResource('/supports', SupportController::class)->middleware('auth');
