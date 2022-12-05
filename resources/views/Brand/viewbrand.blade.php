@extends('layouts.master')
@section('content')

<div id="page-wrapper">



            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Brand Table</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Brand items Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                       <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           
                                            <th>Id</th>
                                            <th>Brand Name</th>
                                            <th>Brand image</th>
                                            <th>details</details></th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                        

                                        @foreach($brand as $brand)
                                        <tr class="odd gradeX">
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$brand->brandname}}</td>
                                            <td><img src="{{asset('backend/image/'.$brand->image)}}" style="height:auto; width:50px;"></td>
                                            <td>{{$brand->details}}</td>
                                            <td>{{$brand->status}}</td>
                                            <td>  <a href="{{route('Brand.edit',[$brand->id])}}"><button type="button" class="btn btn-sm" >Edit</button></a>
                                            <form role="form" method="post" action="{{route('Brand.destroy',[$brand->id])}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                          <button type="submit" class="btn btn-sm" style="display:flex; flex-direction:right;
                                          ">Delete</button></form></td>
                                            
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
     
            <a href="{{route('Brand.create')}}"><button type="button" class="btn btn-success">Add Brand</button></a>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        @endsection