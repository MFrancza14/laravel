<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
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
Route::get('franczak/305511/people', [PeopleController::class, 'index']);
Route::post('franczak/305511/people', [PeopleController::class, 'store']);
Route::get('franczak/305511/people/{people}', [PeopleController::class, 'show']);
Route::put('franczak/305511/people/{people}', [PeopleController::class, 'update']);
Route::delete('franczak/305511/people/{people}', [PeopleController::class, 'destroy']);
