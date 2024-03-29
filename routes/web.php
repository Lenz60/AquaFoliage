<?php

use App\Http\Controllers\ContentExcerptController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailPlantsController;
use App\Http\Controllers\PlantCharacteristicController;
use App\Http\Controllers\PlantsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('HomePage');

Route::controller(DashboardController::class)->group(function (){
    Route::get('/dashboard', "index")->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/dashboard/admin', "admin")->middleware(['auth', 'verified'])->name('dashboard.admin');
    Route::post('/dashboard/{content}&{id}', "removeFav")->middleware(['auth', 'verified'])->name('dashboard.removeFav');
} );



Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(ContentExcerptController::class)->group(function () {
    Route::get('/excerpt','index')->name('ContentExcerpt');
    Route::post('/excerpt','index')->name('ContentExcerpt');
});
Route::get('docs', [PlantsController::class, "index"])->name('plants');
Route::post('docs', [PlantsController::class, "index"])->name('plants');
Route::controller(PlantCharacteristicController::class)->group(function () {
    Route::get('docs/desc', [PlantCharacteristicController::class, "index"])->name('plantCharacteristic');
    // Route::post('docs/desc', [PlantCharacteristicController::class, "index"])->name('plantCharacteristic');
    Route::get('docs/desc/1/content={content}&id={id}', [PlantCharacteristicController::class, "indexFav"])->name('favGet');
    Route::post('docs/desc/1/content={content}&id={id}', [PlantCharacteristicController::class, "addFav"])->name('addfavDB');
    Route::get('docs/desc/0/content={content}&id={id}', [PlantCharacteristicController::class, "indexFav"])->name('unfavGet');
    Route::post('docs/desc/0/content={content}&id={id}', [PlantCharacteristicController::class, "removeFav"])->name('removefavDB');

});
// Route::get('loginOld', [UserController::class, "indexLogin"])->name('login');
// Route::post('login/auth', [UserController::class, "login"])->name('loginAuth');
// Route::get('registerOld', [UserController::class, "register"])->name('register');
// Route::post('docs/plants', [PlantCharacteristicController::class, "index"])->name('plantDesc');
// Route::get('detail', [DetailPlantsController::class, "index"])->name('detailplants');
// Route::post('detail', [DetailPlantsController::class, "index"]);
// Route::inertia('detail','Components/Plants/Content/DetailPlants'); //???????
Route::inertia('test','Components/Plants/Content/Detail'); //???????

require __DIR__.'/auth.php';
