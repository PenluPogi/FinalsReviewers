<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\employee;

class Employeemanagement extends Controller
{
    public function index()
    {
        $employees = employee::get();

        return view('employee.index',compact('employees'));
    }
    

    public function create()
    {
    

        return view('employee.create');
    }

    public function edit(int $id)
    {
        $employee = employee::findOrFail($id);
        

        return view('employee.edit',compact('employee'));
    }

    public function destroy(int $id)
    {
    $employee = employee::findOrFail($id)->delete();
    return redirect()->back();
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            "fname" => "required|max:255|string",
            "midname" => "required|max:255|string",
            "lname" => "required|max:255|string",
            "age" => "required|integer",
            "address" => "required|max:255|string",
            "zip" => "required|integer"


        ]); 

        employee::findOrFail($id)->update($request ->all());
        return redirect()->route('employee.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            "fname" => "required|max:255|string",
            "midname" => "required|max:255|string",
            "lname" => "required|max:255|string",
            "age" => "required|integer",
            "address" => "required|max:255|string",
            "zip" => "required|integer"


            


        ]);
        employee::create($request->all());
        return view('employee.create');


    }
}
