<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\FlatController;

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

Route::view('/', 'home.index')->name('home');

Route::resource('projects', ProjectController::class)->names([
    'index' => 'projects'
]);

Route::resource('houses', HouseController::class)->names([
    'index' => 'houses'
]);

Route::resource('flats', FlatController::class)->names([
    'index' => 'flats'
]);

Route::get('averageCostProject/{projects}', [FlatController::class, 'averageCostProject']);