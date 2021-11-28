<?php

use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\buscarController;
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

Route::redirect('/', 'Animals');
Route::resource('Animals', AnimalsController::class);

Route::prefix('get')->group(function () {
    Route::get('animals-for-type', [buscarController::class, 'getAnimalsSearchValue']);
});
