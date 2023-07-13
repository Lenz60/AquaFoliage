<?php

use App\Http\Controllers\DetailPlantsController;
use App\Http\Controllers\PlantCharacteristicController;
use App\Http\Controllers\PlantsController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::inertia('/','Home');
// Route::inertia('plants','Plants');
// Route::group(
//     [
//         'namespace'=>'Components\Plants\Content',
//         'prefix' => 'detail'
//     ], function(){
//         Route:inertia('detail', ['uses'=>'DetailPlants']);
//     }
// );
// Route::get('detail', function (){
//     return inertia('Components/Plants/Content/DetailPlants', [
//         'name' => $name
//     ]);
// }) ->name('detailplants');

Route::get('docs', [PlantsController::class, "index"]);
Route::get('docs/plants', [PlantCharacteristicController::class, "index"])->name('plantCharacteristic');
Route::post('docs/plants', [PlantCharacteristicController::class, "index"])->name('plantDesc');
Route::get('detail', [DetailPlantsController::class, "index"])->name('detailplants');
Route::post('detail', [DetailPlantsController::class, "index"]);
// Route::inertia('detail','Components/Plants/Content/DetailPlants'); //???????
Route::inertia('test','Components/Plants/Content/Detail'); //???????
// Route::get('/home', function () {
//     return view('welcome');
// });

