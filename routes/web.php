<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('inicial');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/produtos', [ProdutosController::class, 'index']);
Route::post('/produtos', [ProdutosController::class, 'index']);

/*   ou
Route::get('/','home');  */

Route::get('/contato', function () {
    return view('contato');

});


