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

Route::get('home',function (){
    return view('home');
})->middleware('auth');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['cors']], function () {
    Route::group(['middleware' => ['auth'],'as' => 'backoffice.'],function (){
        Route::get('admin','App\Http\Controllers\AdminController@show')
            ->name('admin.show');
        Route::resource('user','App\Http\Controllers\UserController');

        Route::get('patient/{user}/schedule','App\Http\Controllers\PatientController@back_schedule')
            ->name('patient.schedule');
        Route::get('patient/{user}/appointments','App\Http\Controllers\PatientController@back_appointments' )
            ->name('patient.appointments');
        Route::get('patient/{user}/invoices','App\Http\Controllers\PatientController@back_invoices' )
            ->name('patient.invoices');

        Route::resource('role','App\Http\Controllers\RoleController');
        Route::get('user/{user}/assign_role','App\Http\Controllers\UserController@assign_role')
            ->name('user.assign_role');
        Route::post('user/{user}/role_assignment','App\Http\Controllers\UserController@role_assignment')
            ->name('user.role_assignment');

        Route::resource('permission','App\Http\Controllers\PermissionController');
        Route::get('user/{user}/assign_permission','App\Http\Controllers\UserController@assign_permission')
            ->name('user.assign_permission');
        Route::post('user/{user}/permission_assignment','App\Http\Controllers\UserController@permission_assignment')
            ->name('user.permission_assignment');

        Route::resource('speciality','App\Http\Controllers\SpecialityController');
        Route::get('user/{user}/assign_speciality','App\Http\Controllers\UserController@assign_speciality')
            ->name('user.assign_speciality');
        Route::post('user/{user}/speciality_assignment','App\Http\Controllers\UserController@speciality_assignment')
            ->name('user.speciality_assignment');

        Route::resource('patient/{user}/clinic_data', 'App\Http\Controllers\ClinicDataController', ['only' => [
            'index', 'create', 'store'
        ]]);
        Route::resource('patient/{user}/clinic_note', 'App\Http\Controllers\ClinicNoteController', ['only' => [
            'store', 'edit', 'update', 'destroy'
        ]]);
    });



Route::group(['as'=>'frontoffice.'], function (){
   Route::get('profile','App\Http\Controllers\UserController@profile')
       ->name('user.profile');
    Route::get('profile/{user}/edit','App\Http\Controllers\UserController@edit')
        ->name('user.edit');
    Route::put('profile/{user}/update','App\Http\Controllers\UserController@update')->name('user.update');
    Route::get('profile/edit_password','App\Http\Controllers\UserController@edit_password')->name('user.edit_password');
    Route::put('profile/change_password','App\Http\Controllers\UserController@change_password')->name('user.change_password');

   Route::get('patient/schedule', 'App\Http\Controllers\PatientController@schedule')->name('patient.schedule');
   Route::post('patient/store_schedule','App\Http\Controllers\PatientController@store_schedule')->name('patient.store_schedule');
   Route::get('patient/appointments','App\Http\Controllers\PatientController@appointments')->name('patient.appointments');
   Route::get('patient/prescriptions','App\Http\Controllers\PatientController@prescriptions')->name('patient.prescriptions');
   Route::get('patient/invoice','App\Http\Controllers\PatientController@invoices')->name('patient.invoices');


});

Route::group(['middleware' => ['auth'], 'as' => 'ajax.'],function (){
    Route::get('user_speciality','App\Http\Controllers\AjaxController@user_speciality')
        ->name('user_speciality');
    Route::get('note_info', 'App\Http\Controllers\AjaxController@note_info')
        ->name('note_info');
});
});
