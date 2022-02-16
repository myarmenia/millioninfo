<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\Catirgory_oldController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\NewcatigoryController;
use App\Http\Controllers\catigorysController;
use App\Http\Controllers\CategoriesController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clear-cache', function() {
        $run = Artisan::call('migrate');
        return 'FINISHED';  
    });
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/status', [StatusController::class, 'index'])->name('status');
Route::get('/statusdelete/{id}', [StatusController::class, 'delete'])->name('delete');
Route::post('/status', [StatusController::class, 'create'])->name('addstatus');
Route::post('/update', [Catirgory_oldController::class, 'update'])->name('update');
Route::post('/find', [Catirgory_oldController::class, 'find'])->name('find');
Route::get('/find/{id}', [Catirgory_oldController::class, 'findone'])->name('findone');
Route::get('/category/{name}', [Catirgory_oldController::class, 'category']);
Route::get('/company', [Catirgory_oldController::class, 'company']);
Route::get('/search/{name}', [Catirgory_oldController::class, 'search']);

Route::get('/filterme', [FilterController::class, 'filter']);
Route::get('/filterme/{name}', [FilterController::class, 'filtername']);
Route::post('/fiteradd', [FilterController::class, 'create']);
Route::get('/filter', [FilterController::class, 'index']);
Route::post('/updatefiter', [FilterController::class, 'updatefiter']);
Route::get('/filterdelete/{id}', [FilterController::class, 'delete'])->name('delete');

Route::get('info', [InfoController::class, 'index']);


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

Route::get('show/{id}' , [catigorysController::class , 'show'])->name('show');


Route::get('edit/{id}' , [CatigorysController::class , 'edit']);

Route::post('edit' , [catigorysController::class , 'edit']);
Route::post('edit/{id}' , [CatigorysController::class , 'edit']);
Route::get('/categories', [CategoriesController::class, 'indexcategories'])->name('categories');
Route::get('/edit', [CategoriesController::class, 'edit'])->name('edit');
Route::post('/create', [CategoriesController::class, 'createCategories']);
Route::get('/create', [CategoriesController::class, 'createshow'])->name('create');


Route::get('index/{id}', [StatusController::class, 'indexedit']);
Route::post('editnow', [StatusController::class, 'ediit']);
