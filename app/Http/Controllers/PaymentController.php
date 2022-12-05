<?php

namespace App\Http\Controllers;

use App\payment;
use App\employee;
use App\departments;
use App\degination;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment = payment::all();
        return view('payment.view_payment',compact('payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $employee = employee::all();
        $department = departments::all();
        $degination = degination::all();
        return view('payment.Add_payment', compact('employee','department','degination')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    
        payment::create($request->all());
        return redirect()->route('payment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = payment::find($id);
        $employee = employee::all();
        $department = departments::all();
        $degination = degination::all();
        return view('payment.edit_payment', compact('payment','employee','department','degination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $payment = payment::find($id);
       
       $payment->employee_id = $request->get('employee_id');
       $payment->department_id = $request->get('department_id');
       $payment->degination_id = $request->get('degination_id');
       $payment->phone = $request->get('phone');
       $payment->email = $request->get('email');
       $payment->status = $request->get('status');

                 
        return redirect()->route('payment.index')
                 ->with('success',' payment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment =payment::find($id);
        $payment->delete();

        return redirect()->route('payment.index');  
    }
}
