<?php

namespace App\Http\Controllers;
use App\brand;
use Illuminate\Http\Request;

class brandcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $brand = brand::all();
        return view('Brand.viewbrand',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Brand.createbrand');
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
        
      
        $request->validate([
          'brandname' => 'required',  
          
        ]);
    
        $brand = brand::create($request->all());
        $brand->image = $imagename;
       $brand->save();
        
        return redirect()->route('Brand.index');
        return back()->with('success','image uploaded successfully!');
                      
       
        
   

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand =  brand::find($id);
        return view('Brand.edit_brand',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand =brand::find($id);
        $imagename = Time().'.'.$request->file('image')->getClientOriginalExtension();
        move_uploaded_file($request->image, 'backend/image/'.$imagename);
     
        $brand-> image = $imagename;
     
       
        $brand->save();
        return redirect()->route('Brand.index')
                        ->with('success','brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $brand =brand::find($id);
      $brand->delete(); 
      return redirect()->route('Brand.index');
    }
}
