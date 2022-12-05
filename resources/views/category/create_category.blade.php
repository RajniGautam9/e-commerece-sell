@extends('layouts.master')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> categories</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Category Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form"method="post" action="{{route('category.store')}}" enctype="multitype/form-data">
                                    @csrf  
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" name="categoryname" type="text" required>
                                            
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
