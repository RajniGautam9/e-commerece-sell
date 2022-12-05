@extends('layouts.master')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Store Management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Store management Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="{{route('Store.update',[$store->id])}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label>Store Name</label>
                                            <input class="form-control" name="storename" type="text" value="{{$store->storename}}" required>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" name="address" type="text" value="{{$store->address}}" placeholder="Address">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone No.</label>
                                            <input class="form-control" name="phone" type="number" value="{{$store->phone}}" placeholder="phno.">
                                        </div>
                             
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" type="email" value="{{$store->email}}" placeholder="E-mail">
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label> Store Description</label>
                                            <textarea class="form-control" name="details"  type="text"rows="3">{{$store->storename}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select id="select" class="form-control" name="status" value="{{$store->status}}">
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