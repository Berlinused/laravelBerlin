<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    // echo ('hello berlin new World!');
    return view('home');
});

Route::get('/f1', function () {
    return view('f1');
});

Route::get('/f2', function () {
    return view('f2');
});

Route::get('/f3', function () {
    return view('f3');
})->name('f3');

Route::get('/new_f4', function () {
    return view('f4');
})->name('berlin');

// 這一段是自訂義，也要寫到 StudentController 裡面
Route::get('/student/excel', [StudentController::class, 'excel'])->name('excel');
Route::get('/student_child', [StudentController::class, 'childPage'])->name('child');
Route::get('/student_app', [StudentController::class, 'appPage'])->name('app');


Route::resource('students',StudentController::class);

