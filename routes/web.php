<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Validation\Rules\In;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
Route::get('/about-us', [AboutUsController::class, 'aboutus']);
Route::get('/login', function () {
    return 'login';
});
Route::get('/clientes', function () {
    return 'clientes';
});
Route::get('/fornecedores', function () {
    return 'fornecedores';
});
Route::get('/produtos', function () {
    return 'produtos';
});

    Route::prefix('/app')->group(function () {
        Route::get('/client', function () {
            return'client';
        })->name('app.clientes');
        Route::get('/provider', function () {
            return'provider';
        })->name('app.fornecedores');
        Route::get('/produt', function () {
            return'produt';
        })->name('app.produtos');
    });
