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


Route::post('/holidays', [\App\Http\Controllers\HolidayController::class, 'store']);
Route::get('/holidays', [\App\Http\Controllers\HolidayController::class, 'index']);
Route::delete('/holidays/{holiday}',[\App\Http\Controllers\HolidayController::class, 'delete']);
Route::post('/holidays/{holiday}',[\App\Http\Controllers\HolidayController::class, 'update']);

Route::post('/companies', [\App\Http\Controllers\CompanyController::class, 'store']);
Route::get('/companies', [\App\Http\Controllers\CompanyController::class, 'index']);
Route::post('/companies/{company}',[\App\Http\Controllers\CompanyController::class, 'update']);
Route::delete('/companies/{company}',[\App\Http\Controllers\CompanyController::class, 'delete']);

Route::post('/localizations', [\App\Http\Controllers\LocalizationController::class, 'store']);
Route::get('/localizations', [\App\Http\Controllers\LocalizationController::class, 'index']);
Route::post('/localizations/{localization}',[\App\Http\Controllers\LocalizationController::class, 'update']);

Route::post('/leaves',[\App\Http\Controllers\LeaveController::class, 'store']);
Route::get('/leaves', [\App\Http\Controllers\LeaveController::class, 'index']);
Route::post('/leaves/{leave}',[\App\Http\Controllers\LeaveController::class, 'update']);
Route::delete('/leaves/{leave}',[\App\Http\Controllers\LeaveController::class, 'delete']);

Route::get('/leaves-setting', [\App\Http\Controllers\LeaveSettingsController::class, 'index']);
Route::post('/leave-settings/{leaves-setting}',[\App\Http\Controllers\LeaveSettingsController::class, 'update']);
