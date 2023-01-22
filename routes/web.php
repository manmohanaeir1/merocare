<<<<<<< HEAD
=======
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;


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

<<<<<<< HEAD
Route::get('/home', function () {
    return view('index');
});
=======
// Route::get('/home', function () {
//     return view('index');
// });
>>>>>>> 30b545607f19e90ecd0f337bf137ed0267950f8b


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

<<<<<<< HEAD
=======


Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 30b545607f19e90ecd0f337bf137ed0267950f8b
Route::get('/redirects',[HomeController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
>>>>>>> b0a33db39580d57967d3fc5df00479e00936d31b
