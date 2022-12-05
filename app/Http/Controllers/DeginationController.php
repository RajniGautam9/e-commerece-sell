<?php

namespace App\Http\Controllers;

use App\degination;
use App\departments;
use Illuminate\Http\Request;

class DeginationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degination= degination::all();
        return view('degination.view_degination',compact('degination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = departments::all();
        return view('Degination.Add_degination', compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'deginationname' => 'required',
        ]);
        degination::create($request->all());
        return redirect()->route('Degination.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\degination  $degination
     * @return \Illuminate\Http\Response
     */
    public function show(degination $degination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\degination  $degination
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $degination = degination::find($id);
        $department = departments::all();
        return view('Degination.edit_degination', compact('degination','department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\degination  $degination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $degination = degination::find($id);
        $degination->department_id = $request->get('department_id');
       $degination->deginationname = $request->get('deginationname');
        $degination->status = $request->get('status');
         $degination->save();
                 
        return redirect()->route('Degination.index')
                 ->with('success',' degination updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\degination  $degination
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $degination =degination::find($id);
        $degination->delete();

        return redirect()->route('Degination.index');  
        
    }
}
