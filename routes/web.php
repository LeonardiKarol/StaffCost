<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});

Route::get('/login', [SessionController::class, 'create'])->name('login')->middleware('guest');

Route::post('/login', [SessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');

Route::middleware('auth')->group(function ()
    {
        Route::get('/employees', [EmployeeController::class, 'index']) ->name('employees.index');

        Route::get('/employees/create',[EmployeeController::class, 'create'])->name('employees.create');

        Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');

        Route::get('/employees/{employee}',[EmployeeController::class, 'show'])->name('employees.show');

        Route::get('/employees/{employee}/edit',[EmployeeController::class, 'edit'])->name('employees.edit');

        Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');

        Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.delete');   
        Route::redirect('/', '/employees');    
    }
);
