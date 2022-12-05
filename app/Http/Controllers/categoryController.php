<?php

namespace App\Http\Controllers;
use App\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
/**
     * Display a listing of the resource.
     * 
     *  
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category= category::all();
       return view('category.view_category',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create_category');
        return redirect()->route('category.index');
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
            'categoryname' => 'required',
            
        ]);
       
       $category = category::create($request->all());
       return redirect()->route('category.index');
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
        $category =  category::find($id);
        return view('category.edit_category',compact('category'));
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
      
        $category = category::find($id);
        $category->update($request->all());
        $category->save();

        return redirect()->route('category.index')
                        ->with('success','category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category =category::find($id);
        $category->delete();

        return redirect()->route('category.index');
    }
}
