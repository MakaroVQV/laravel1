<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto', [ProdutoController::class, 'index']
)->name('produto.index');



//create
Route::post('/produto/create',[ProdutoController::class, 'store'])
->name('produto.store');

//exibir
Route::get('/produto/create',[ProdutoController::class, 'create'])
->name('produto.create');
//salvar


Route::get('/produto/{id}' , [ProdutoController::class, 'show'])
->name('produto.show');