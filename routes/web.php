<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('home');
});

Route::get('/hello', function(){
    return "Ciao da StaffCost";
});
Route::get('/employees', [EmployeeController::class, 'index']);