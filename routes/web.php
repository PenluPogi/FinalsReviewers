<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');


    //all routes here
    Route::get('employee', [\App\Http\Controllers\Employeemanagement::class, 'index'])->name('employee.index');

    Route::get('employee/create', [\App\Http\Controllers\Employeemanagement::class, 'create'])->name('employee.create');

    Route::post('employee/create', [\App\Http\Controllers\Employeemanagement::class, 'store'])->name('employee.store');

    Route::get('employee/{id}/edit', [\App\Http\Controllers\Employeemanagement::class, 'edit'])->name('employee.edit');

    

    
    Route::put('employee/{id}/edit', [\App\Http\Controllers\Employeemanagement::class, 'update'])->name('employee.update');
    Route::get('employee/{id}/delete', [\App\Http\Controllers\Employeemanagement::class, 'destroy'])->name('employee.destroy');
});
