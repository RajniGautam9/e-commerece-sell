@extends('layouts.master')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-16">
                    <h1 class="page-header"> Employees</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-16">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Employees Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="{{route('Employee.store')}}" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <label>Employee Name</label>
                                            <input class="form-control" name="employeename" type="text" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Employee image</label>
                                            <input class="form-control" name="image" type="file">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" placeholder="Enter text" name="Address" type="text">
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
                                            <label>citizen_no.</label>
                                            <input class="form-control" placeholder="Enterno." name="citizen_no" type="number">
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