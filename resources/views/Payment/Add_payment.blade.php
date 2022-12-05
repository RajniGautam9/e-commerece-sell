@extends('layouts.master')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-16">
                    <h1 class="page-header"> Payment</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-16">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Payment Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="{{route('payment.store')}}" enctype="multipart/form-data">
                                    @csrf
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
                                            <label>Phone</label>
                                            <input class="form-control" placeholder="Enter no." name="phone" type="number">
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" placeholder="Enter text" name="email" type="email">
                                        </div>

                                        <div class="form-group">
                                            <label>Salary</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>payment
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Advance
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Bonous
                                                </label>
                                            </div>

                                       
                                                
                                        
                                         
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select id="select" class="form-control" name="status" type="text">
                                                <option value="Active">Active</option>
                                                <option value="Active">De-Active</option>
                                            </select>
                                                </div> 

                                        <button type="submit" class="btn btn-default btn-success">Submit Button</button>
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