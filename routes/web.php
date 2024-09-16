<?php

use App\Http\Controllers\Admin\{ReplySupportController, SupportController};
use App\Http\Controllers\CargoController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site\SiteController;
use App\Models\Pessoa;
use Illuminate\Support\Facades\Route;

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::prefix('/pessoa')->group(function (){   
    Route::get('/create', [PessoaController::class, 'create'])->name('pessoa.create');
    Route::post('/store', [PessoaController::class, 'store'])->name('pessoa.store');
    Route::get('/{pessoa}/show', [PessoaController::class, 'show'])->name('pessoa.show');
    Route::get('/index', [PessoaController::class, 'index'])->name('pessoa.index');
    Route::delete('/{pessoa}', [PessoaController::class, 'destroy'])->name('pessoa.destroy');
    Route::put('/{pessoa}', [PessoaController::class, 'update'])->name('pessoa.update');
    Route::get('/{pessoa}/edit', [PessoaController::class, 'edit'])->name('pessoa.edit');
    Route::get('/confirm/{pessoa}', [PessoaController::class, 'confirmDelete'])->name('pessoa.confirm');
});

Route::prefix('/cargo')->group(function (){   
    Route::get('/create', [CargoController::class, 'create'])->name('cargo.create');
    Route::post('/store', [CargoController::class, 'store'])->name('cargo.store');
    Route::get('/{cargo}/show', [CargoController::class, 'show'])->name('cargo.show');
    Route::get('/index', [CargoController::class, 'index'])->name('cargo.index');
    Route::delete('/{cargo}', [CargoController::class, 'destroy'])->name('cargo.destroy');
    Route::put('/{cargo}', [CargoController::class, 'update'])->name('cargo.update');
    Route::get('/{cargo}/edit', [CargoController::class, 'edit'])->name('cargo.edit');
    Route::get('/confirm/{cargo}', [CargoController::class, 'confirmDelete'])->name('cargo.confirm');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__ . '/auth.php';
