<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

// --------------------- PRODUTO ----------------------------------

Route::get('/produto', [ProdutoController::class, 'index'])
->name('produto.index');

// create
// exibir o formulário
Route::get('/produto/create', [ProdutoController::class, 'create'])
->name('produto.create');

// salvar o formulário
Route::post('/produto/create', [ProdutoController::class, 'store'])
->name('produto.store');


Route::get('/produto/{id}', [ProdutoController::class, 'show'])
->name('produto.show');

//edit
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])
->name('produto.edit');

//att
