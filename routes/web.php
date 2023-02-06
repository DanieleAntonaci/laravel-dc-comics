<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'index'])
    ->name('index');

Route::get('/person/show/{person}', [MainController::class, 'personShow'])
    ->name('person.show');

Route::get('/person/destroy/{person}', [MainController::class, 'personDestroy'])
    ->name('person.destroy');