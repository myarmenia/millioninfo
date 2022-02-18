<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catigorysController;

use App\Http\Controllers\StatusController;

use App\Http\Controllers\CategoriesController;



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


Route::middleware('auth:api')->get('/category/{name}', [z::class, 'category']);
Route::middleware('auth:api')->get('/company', [CatirgoryController::class, 'company']);

Route::get('/categorys', [catigorysController::class, 'index']);


Route::get('subcategorys/{id}', [catigorysController::class, 'showapi']);

Route::get('Categories', [CategoriesController::class, 'Categoriesapi']);

