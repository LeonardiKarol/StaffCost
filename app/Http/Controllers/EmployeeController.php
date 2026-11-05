<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('sector')->get();

        return view('employees.index', ['employees' => $employees]);
    }
    public function create(){
        return view('employees.create');
    }
    public function store(StoreEmployeeRequest $request){  
        

        Employee::create($request->validated());

        return redirect()->route('employees.index');
    }
    public function show(Employee $employee){
        return view('employees.show', ['employee' => $employee]);
    }

    public function edit(Employee $employee){
        return view('employees.edit', ['employee' => $employee]);
    }
    public function update(Employee $employee, UpdateEmployeeRequest $request){
        
        $employee->update($request->validated());

        return redirect()->route('employees.show', $employee);
    }
}
