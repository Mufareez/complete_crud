<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('datacollect');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


$request->validate([
        'name'        => 'required|string|max:255',
        'eid'         => 'required|string|max:100|unique:employees,eid',
        'dob'         => 'required|date|before:today',
        'gender'      => 'required|in:Male,Female',
        'nic'         => 'required|string|max:20|unique:employees,nic',
        'address'     => 'required|string|max:1000|nullable',
        'number'      => 'required|string|regex:/^[0-9]{10,15}$/',
        'email'       => 'required|email|unique:employees,email',
        'doj'         => 'required|date|before_or_equal:today',
        'department'  => 'required|string|max:255',
        'role'        => 'required|string|max:255',
        'type'        => 'required|string|max:255',
        'branch'      => 'required|string|max:255',
        'experience'  => 'required|string|max:255',
    ]);

//  dd($request->all());

 Employee::create($request->all());

    return redirect()->back()->with('success', 'Employee added successfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
