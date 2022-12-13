<?php

use App\Http\Controllers\admin\WatchController;
use Illuminate\Support\Facades\Route;

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

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
        Route::get('/watch', [WatchController::class, 'index']);
        Route::get('/watch/create', [WatchController::class, 'create']);
        Route::post('/watch/create', [WatchController::class, 'store']);
        Route::get('/watch/edit/{id}', [WatchController::class, 'edit']);
        Route::post('/watch/edit/{id}', [WatchController::class, 'update']);
        Route::get('/watch/delete/{id}', [WatchController::class, 'destroy']);
    });

//Route::get('/', function () {
//    return view('welcome');
//});
