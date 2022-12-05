@extends('layouts.master')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-16">
                    <h1 class="page-header"> Products</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-16">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <label>product Name</label>
                                            <input class="form-control" name="name" type="text" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>store</label>
                                            <select id="select" class="form-control" name="store_id" type="text">
                                                @foreach($store as $stores)
                                                <option value="{{$stores->id}}">{{$stores->storename}}</option>
                                                @endforeach
                                            </select>
                                            
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Product image</label>
                                            <input class="form-control" name="image" type="file">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Brand Name</label>
                                             <select id="select" class="form-control" name="brand_id" type="text">
                                                @foreach($brand as $brands)
                                                <option value="{{$brands->id}}">{{$brands->brandname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select id="select" class="form-control" name="category_id" type="text">
                                                @foreach($category as $categories)
                                                <option value="{{$categories->id}}">{{$categories->categoryname}}</option>
                                                @endforeach
                                           </select>
                                            
                                        </div>

                                       
                                                
                                        
                                          <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="2" name="details" type="text"></textarea>
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