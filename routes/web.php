<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PlantsController;

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

Route::get('/home', function () {
    return view('home', [
        "name" => "Lorem",
        "email" => "lorem@gmail"
    ]);
});

Route::get('/about', [AboutController::class, 'info'])->name('info');
Route::get('/vue', function () {
    return view('vue');
} );

Route::get('/plants', [PlantsController::class, 'index'])->name('plants');
