<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProjectController as ProjectController;
use App\Http\Controllers\Api\TypeController as TypeController;
use App\Http\Controllers\Api\TechnologyController as TechnologyController;

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

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{slug}', [ProjectController::class, 'show']);

Route::get('/types', [TypeController::class, 'index']);
Route::get('/types/{slug}', [TypeController::class, 'show']);

Route::get('/technologies', [TechnologyController::class, 'index']);
Route::get('/technologies/{slug}', [TechnologyController::class, 'show']);