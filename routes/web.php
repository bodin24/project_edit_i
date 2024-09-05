<?php

use App\Http\Controllers\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('form', function () {
    return view('form');
})->name('form');
Route::get('edit', function () {
    return view('edit');
})->name('edit');

Route::get('/', [Employee::class, 'employeeData']);

Route::post('addData', [Employee::class, 'addData'])->name('addData');

Route::get('deleteData/{id}', [Employee::class, 'deleteData'])->name('deleteData');

Route::get('editData/{id}', [Employee::class, 'editData'])->name('editData');

Route::post('updateData/{id}', [Employee::class,'updateData'])->name('updateData');
