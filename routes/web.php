<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Validation\Rules\In;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'main']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/about-us', [AboutUsController::class, 'aboutus']);
Route::get(
    '/contact/{nome}{categoria_id}',
    function (
        string $nome = 'Desconhecido',
        int $categoria_id = 1
    ) {
        echo "estamos aqui: $nome - $categoria_id";
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
