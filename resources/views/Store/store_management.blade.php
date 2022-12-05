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
                                    <form role="form" method="post" action="{{route('Store.store')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Store Name</label>
                                            <input class="form-control" name="storename" type="text" required>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" name="address" type="text" placeholder="Address">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone No.</label>
                                            <input class="form-control" name="phone" type="number" placeholder="phno.">
                                        </div>
                             
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" type="email" placeholder="E-mail">
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label> Store Description</label>
                                            <textarea class="form-control" name="details" type="text"rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select id="select" class="form-control" name="status">
                                                <option value="Active">Active</option>
                                                <option value="Active">De-Active</option>
                                              </select>
                                                
                                        </div>
                              
                                        

                                        
                                       
                                        
                                       <a href="{{route('Store.index')}}"><button type="submit" class="btn btn-success">Submit Button</button></a>
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