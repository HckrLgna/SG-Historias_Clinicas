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
Route::get('test',function (){
    $user = auth()->user();

});
Route::get('/',function (){
    return view('welcome');
});
Route::get('home',function (){
    return view('home');
})->middleware('auth');

Auth::routes(['verify' => true]);

Route::group(['middleware'=>['auth'],'as' => 'backoffice'],function (){
    Route::get('admin','App\Http\Controllers\AdminController@show')->name('admin.show');
    Route::resource('user','App\Http\Controllers\UserController');

    Route::get('user/{user}/assign_role','App\Http\Controllers\UserController@assign_role')->name('user.assign_role');
    Route::post('user/{user}/role_assignment','App\Http\Controllers\UserController@role_assignment')->name('user.role_assignment');

    Route::get('user/{user}/assign_permission','App\Http\Controllers\UserController@assign_permission')->name('user.assign_permission');
    Route::post('user/{user}/permission_assignment','App\Http\Controllers\UserController@permission_assignment')->name('user.permission_assignment');

    Route::resource('role','App\Http\Controllers\RoleController');
    Route::resource('permission','App\Http\Controllers\PermissionController');
});

Route::group(['as'=>'frontoffice'], function (){
   Route::get('profile','App\Http\Controllers\UserController@profile')->name('user.profile');
});
