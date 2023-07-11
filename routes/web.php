<?php

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
Route::get('detail', function (){
    return inertia('Components/Plants/Content/DetailPlants', [
        'name' => 'Foo'
    ]);
});

Route::get('plants', [PlantsController::class, "index"]);
// Route::inertia('detail','Components/Plants/Content/DetailPlants'); //???????
// Route::get('/home', function () {
//     return view('welcome');
// });

