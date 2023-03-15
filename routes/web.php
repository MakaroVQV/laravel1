<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto', [ProdutoController::class, 'index']
)->name('produto.index');

Route::get('/produto/{id}' , [ProdutoController::class, 'show'])
->name('produto.show');