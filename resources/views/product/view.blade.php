@extends('layouts.master')
@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product Table</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product items Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>Sno</th>
                                            <th>Product items</th>
                                            <th>store</th>
                                            <th>Product image</th>
                                            <th>Brand name</th>
                                            <th>category name</th>
                                            <th>details</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($product as $product)
                                        <tr class="odd gradeX">
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->store->storename}}</td>
                                            <td><img src="{{asset('backend/image/'.$product->image)}}" style="height:auto; width:50px;"></td>
                                            <td>{{$product->brand->brandname}}</td>
                                            <td class="center">{{$product->category->categoryname}}</td>
                                            <td class="center">{{$product->details}}</td>
                                            <td class="center">{{$product->status}}</td>
                                            <td ><a href="{{route('product.edit',[$product->id])}}"><button type="button" class="btn btn-sm">Edit</button></a> <form role="form" method="post"  action="{{route('product.destroy',[$product->id])}}">
                                            @csrf
                                            @method('DELETE')
                                             <button type="submit" class="btn btn-sm">Delete</button></td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
   
            <!-- /.row -->
 
            <!-- /.row -->
     
            <a href ="{{route('product.create')}}"> <button type="button" class="btn btn-success">Add product</button></a>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        @endsection

