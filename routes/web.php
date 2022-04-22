<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
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
Auth::routes(['verify' => true]);

Route::group(['middeleware'=>['auth'],'as' => 'backoffice.'],function (){
    Route::resource('role','App\Http\Controllers\RoleController');
    Route::resource('permission','App\Http\Controllers\PermissionController');
});
Route::get('/','App\Http\Controllers\RoleController@index');
