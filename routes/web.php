<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\Study_ProgramController;

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

Route::get('/', function () {
    return view('home');
});

Route::resource('study_programs', Study_ProgramController::class);
Route::resource('faculty', FacultyController::class);

Route::get('/halaman-a', function () {
    return view('contoh.halamana');
});

Route::get('/halaman-b', function () {
    return view('contoh.halamanb');
});
Route::get('/halaman-c', function () {
    return view('contoh.halamanc');
});