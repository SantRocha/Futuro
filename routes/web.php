<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TipoCompraController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ItemsCompraController;
use App\Http\Controllers\RelatorioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resource('tipo_compra', TipoCompraController::class);


    Route::resource('compra', CompraController::class);


    Route::get('compra/{compraId}/itens', [ItemsCompraController::class, 'index'])->name('itens.index');

    Route::get('compra/{compraId}/itens/create', [ItemsCompraController::class, 'create'])->name('itens.create');
    Route::post('compra/{compraId}/itens', [ItemsCompraController::class, 'store'])->name('itens.store');

    Route::get('compra/{compraId}/{itemId}/itens/edit', [ItemsCompraController::class, 'edit'])->name('itens.edit');
    Route::patch('compra/{compraId}/{itemId}/itens', [ItemsCompraController::class, 'update'])->name('itens.update');

    Route::delete('compra/{compraId}/{itemId}/itens', [ItemsCompraController::class, 'destroy'])->name('itens.destroy');


    //Route::get('/relatorios', [RelatorioController::class, 'index'])->name('relatorios.index');
    //Route::post('/relatorios/gerar', [RelatorioController::class, 'gerar'])->name('relatorios.gerar');
    //Route::post('/relatorios/pdf', [RelatorioController::class, 'exportarPdf'])->name('relatorios.pdf');
});

Route::middleware(['auth'])->prefix('relatorios')->group(function () {
    Route::get('/', [RelatorioController::class, 'index'])->name('relatorio.index');
    Route::post('/gerar', [RelatorioController::class, 'gerar'])->name('relatorio.gerar');
    Route::post('/pdf', [RelatorioController::class, 'exportarPdf'])->name('relatorio.pdf');
});

require __DIR__.'/auth.php';
