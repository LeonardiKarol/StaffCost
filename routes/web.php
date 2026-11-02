<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/hello', function () {
    return 'Ciao da StaffCost';
});
Route::get('/employees', [EmployeeController::class, 'index']);
