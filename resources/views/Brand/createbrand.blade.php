@extends('layouts.master')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Brands</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Brand Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="{{route('Brand.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Brand Name</label>
                                            <input class="form-control" name="brandname" type="text" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Brand image</label>
                                            <input class="form-control" name="image" type="file">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="details" type="text" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select id="select" class="form-control" name="status">
                                                <option value="Active">Active</option>
                                                <option value="Active">De-Active</option>
                                              </select>
                                                
                                        </div>
                              
                                        

                                        
                                       
                                        
                                        <a href="{{route('Brand.create')}}"><button type="submit" class="btn btn-default">Submit Button</button></a>
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
