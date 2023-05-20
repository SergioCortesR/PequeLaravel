<?php

use App\Http\Controllers\Catalogs\CountryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Tambien se conoce como endpoint
Route::controller(CountryController::class)->group(function () {
    Route::get('countries', 'index');
    Route::get('countries/{country}', 'show');
    Route::post('countries', 'store');
    Route::put('countries/{country}', 'update');
    Route::delete('countries/{country}', 'destroy');
    Route::get('countries/options/custom', 'custom');
});


