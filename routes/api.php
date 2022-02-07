<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::middleware(['cors'])->post('/holidays', 'HolidayController@store')->name('holiday.store');

//Route::middleware(['cors'])->group(function () {
//    Route::post('/holidays', 'HolidayController@store')->name('holiday.store');
//});

Route::post('/holidays', [\App\Http\Controllers\HolidayController::class, 'store']);
Route::get('/holidays', [\App\Http\Controllers\HolidayController::class, 'index']);
Route::delete('/holidays/{holiday}',[\App\Http\Controllers\HolidayController::class, 'destroy']);
Route::post('/holidays/{holiday}',[\App\Http\Controllers\HolidayController::class, 'update']);

Route::post('/companies', [\App\Http\Controllers\CompanyController::class, 'store']);
Route::get('/companies', [\App\Http\Controllers\CompanyController::class, 'index']);
