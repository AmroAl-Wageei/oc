<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student;
use App\Http\Controllers\coach;

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
    return view('welcome');
});

Route::get('/d', function () {
    return view('layout/dashboard');
});
Route::get('/p', function () {
    return view('layout/product');
});

Route::get('/m', function () {
    return view('admin/main');
});

// Route::get('/s', function () {
//     return view('student');
// });


Route::get('/s' , [student::class , 'index']);



Route::get('/res' , [coach::class , 'index']); 
Route::resource('/res' , coach::class );