<?php

namespace App\Http\Controllers;

use App\product;
use App\brand;
use App\category;
use App\store;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()


    {
        $product = product::all();
       return view('product.view',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
      $brand = brand::all();
      $category = category::all();
      $store = store::all();
        
        return view('product.create',compact('brand','category','store'));    
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
        
        $request ->validate([
            'name' => 'required',
        ]);
         

        $product = product::create($request->all());
        $product->image = $imagename;
        $product->save();
        
        return redirect()->route('product.index');
        return back()->with('success','image uploaded successfully!');
    }              
       
        

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product =  product::find($id);
        $brand =  brand::all();
        $category =  category::all();
        $store =  store::all();
        return view('product.edit_product',compact('product','brand','category','store'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $product = product::find($id);
       $imagename = Time().'.'.$request->file('image')->getClientOriginalExtension();
       move_uploaded_file($request->image, 'backend/image/'.$imagename);
    
       $product->image = $imagename;
       $product->name = $request->get('name');
       $product->store_id = $request->get('store_id');
       $product->brand_id = $request->get('brand_id');
       $product->category_id = $request->get('category_id');
       $product->details = $request->get('details');
       $product->status = $request->get('status');

       $product->save();                
       return redirect()->route('product.index')
                ->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $product = product::find($id);
     $product->delete();
     
     return redirect()->route('product.index');
    }
}


