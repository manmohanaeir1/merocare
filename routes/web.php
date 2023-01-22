<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;

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

// Route::get('/home', function () {
//     return view('index');
// });


Route::get('/', [PatientsController::class, 'index']);
Route::post('/', [PatientsController::class, 'store']);

//admin

Route::get('/admin/layouts', function () {
    return view('layouts.default');
});



Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/news', function () {
    return view('admin.news');
});



