@extends('layouts.master')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            category Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="{{route('customer.update',[$customer->id])}}">
                                    @csrf
                                    @method('PUT') 
                                     
                                        <div class="form-group">
                                            <label>customer Name</label>
                                            <input class="form-control" name="customername" type="text" value="{{$customer->customername}}" required>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" name="address" type="text" value="{{$customer->address}}" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>state</label>
                                            <input class="form-control" name="state" type="text" value="{{$customer->state}}" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>country</label>
                                            <input class="form-control" name="country" type="text" value="{{$customer->country}}" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" name="email" type="text" value="{{$customer->email}}" required>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>postal-code</label>
                                            <input class="form-control" name="postalcode" type="text" value="{{$customer->postalcode}}" required>
                                            
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select id="select" class="form-control" name="status" value="{{$customer->status}}">
                                                <option value="Active">Active</option>
                                                <option value="Active">De-Active</option>
                                                   </select>
                                        </div>
                                        

                                        
                                       
                                        
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
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
