<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;




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


Route::group(['middleware' => ['api']], function() {
    Route::get('subcategorys/{id}', [ApiController::class, 'showapi']);
    Route::get('Categories', [ApiController::class, 'Categoriesapi']);

    Route::get('/category_search/{types_of_activities}', [ApiController::class, 'category']);
    Route::get('/show_company_name/{name}', [ApiController::class, 'show_company_name']);

    Route::get('/category/{types_of_activities}', [ApiController::class, 'category']);
    Route::get('/show_single_company/{id}', [ApiController::class, 'show_single_company']);

});


