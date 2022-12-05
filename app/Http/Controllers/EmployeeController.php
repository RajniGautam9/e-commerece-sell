<?php

namespace App\Http\Controllers;

use App\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = employee::all();
        return view('Employee.view_employee',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Employee.Add_employee'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagename = Time() .'.'.$request->file('image')->getClientOriginalExtension();
        move_uploaded_file($request->image,'backend/image/'.$imagename);
        $employee = employee::create($request->all());
        $employee->image = $imagename;
    
        $employee->save();
        
        return redirect()->route('Employee.index');
        return back()->with('success','image uploaded successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee =  employee::find($id);
        return view('Employee.edit_employee',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $employee = employee::find($id);
        $imagename = Time().'.'.$request->file('image')->getClientOriginalExtension();
        move_uploaded_file($request->image, 'backend/image/'.$imagename);
     
        $employee-> image = $imagename;
     
        $employee->update($request->all());
 
        $employee->save();
        
                 
        return redirect()->route('Employee.index')
                 ->with('success',' employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        $employee = employee::find($id);
        $employee->delete();
        
        return redirect()->route('Employee.index');
    }
}
