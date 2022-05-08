<?php

use App\Http\Controllers\Api\TechnicTypesController;
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

Route::get('types', [TechnicTypesController::class, 'index']);
Route::get('types/{id}', [TechnicTypesController::class, 'show']);
Route::post('types', [TechnicTypesController::class, 'store']);
Route::put('types/{id}', [TechnicTypesController::class, 'update']);
Route::delete('types/{id}', [TechnicTypesController::class, 'delete']);
