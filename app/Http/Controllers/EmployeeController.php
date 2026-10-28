<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index () {
        $employees = ["marco","gianni","luca"];
        return view('employees.index', ['employees' => $employees]);
    }
}
