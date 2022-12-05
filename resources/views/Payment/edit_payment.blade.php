@extends('layouts.master')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> payment Management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            payment management Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="{{route('payment.update',[$payment->id])}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            
                                            <label>Employee Name</label>
                                           <select id="select" class="form-control" name="employee_id" type="text">
                                                @foreach($employee as $employees)
                                                <option value="{{$employees->id}}">{{$employees->employeename}}</option>
                                                @endforeach
                                            </select>
                                           
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Department Name</label>
                                            <select id="select" class="form-control" name="department_id" type="text">
                                                @foreach($department as $departments)
                                                <option value="{{$departments->id}}">{{$departments->departmentname}}</option>
                                                @endforeach
                                            </select>
                                           
                                          
                                        </div>
                                        <div class="form-group">
                                            <label>Degination Name</label>
                                            <select id="select" class="form-control" name="degination_id" type="text">
                                                @foreach($degination as $deginations)
                                                <option value="{{$deginations->id}}">{{$deginations->deginationname}}</option>
                                                @endforeach
                                            </select>
                                           
                                            
                                        </div>
                                      
                                        
                                        
                                        <div class="form-group">
                                            <label>Phone No.</label>
                                            <input class="form-control" name="phone" type="number" value="{{$payment->phone}}" placeholder="phno.">
                                        </div>
                             
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" type="email" value="{{$payment->email}}" placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <label>Salary</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="{{$payment->option1}}" checked>payment
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="{{$payment->option2}}">Advance
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="{{$payment->option3}}">Bonous
                                                </label>
                                            </div>

                                       
                                       
                                        
                                        
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select id="select" class="form-control" name="status" value="{{$payment->status}}">
                                                <option value="Active">Active</option>
                                                <option value="Active">De-Active</option>
                                              </select>
                                                
                                        </div>
                              
                                        

                                        
                                       
                                        
                                        <button type="submit" class="btn btn-success">Submit Button</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        @endsection