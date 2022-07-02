<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
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
// Route::get('/students', [StudentsController::class, 'index'])->name('students.list');
Route::get('/students/details/{student_id}', 'details')->name('student.details');
Route::post('/students/update/details/{student_id}', 'updatedetails')->name('student.update');

Route::controller(StudentsController::class)->group(function () {
    Route::get('/students', 'index')->name('students.list');
    Route::get('/students/create', 'create')->name('students.create');
    Route::post('/students', 'store')->name('students.store');
    Route::get('/students/edit/{students}', 'edit')->name('student.edit');
     Route::put('/students/{students}', 'update')->name('students.update');
     Route::get('/students/{students}', 'destroy')->name('students.delete');
});

