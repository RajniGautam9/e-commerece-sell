@extends('layouts.master')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> customers</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customers Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form"method="post" action="{{Route('customer.store')}}" enctype="multitype/form-data">
                                    @csrf  
                                        <div class="form-group">
                                            <label>Customer Name</label>
                                            <input class="form-control" name="customername" type="text" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" name="address" type="text" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>state</label>
                                            <input class="form-control" name="state" type="text" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>country</label>
                                            <input class="form-control" name="country" type="text" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>email</label>
                                            <input class="form-control" name="email" type="text" required>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Postal code</label>
                                            <input class="form-control" name="postalcode" type="text" required>
                                            
                                        </div>
                                        
                                       
                                        
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select id="select" class="form-control" name="status">
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
