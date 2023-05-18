<?php

use App\Http\Controllers\PaginationController;
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

Route::get('/', function () {
    return view('dataTable');
});
Route::get('/searchableDropdown', function () {
    return view('searchableDropdown');
});
Route::get('/toastr',[
    'uses'       =>'App\Http\Controllers\MainController@toastr',
    'as'         =>'toastr'
]);
Route::get('/test',[
    'uses'       =>'App\Http\Controllers\MainController@test',
    'as'         =>'test'
]);
Route::get('/multipleRowInsert',[
    'uses'       =>'App\Http\Controllers\MainController@multipleRowInsert',
    'as'         =>'multipleRowInsert'
]);
Route::post('/multipleRowInfoSubmit',[
    'uses'       =>'App\Http\Controllers\MainController@multipleRowInfoSubmit',
    'as'         =>'multipleRowInfoSubmit'
]);

Route::get('mail-send',[
    'uses'       =>'App\Http\Controllers\MainController@mailSend',
    'as'         =>'mail-send'
]);

Route::get('/pagination',[PaginationController::class,'index']);
Route::post('pagination/fetch',[PaginationController::class,'fetch'])->name('pagination.fetch');
