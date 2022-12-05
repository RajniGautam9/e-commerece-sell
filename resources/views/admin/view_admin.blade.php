@extends('layouts.master')
@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admins Table</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Admins Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>Sno </th>
                                            <th>Admin Name </th>
                                             <th>state</th>
                                            <th>country</th>
                                            <th>E-mail</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($admin as $admin)
                                        <tr class="odd gradeX">
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$admin->adminname}}</td>
                                             <td>{{$admin->state}}</td>
                                            <td>{{$admin->country}}</td>
                                            <td>{{$admin->email}}</td>
                                            <td>{{$admin->status}}</td>
                                           <td><a href="{{route('admin.edit',[$admin->id])}}"> <button type="button" class="btn btn-sm">Edit</button></a>
                                           <form role="form" method="post" action="{{route('admin.destroy',[$admin->id])}}">
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
     
            <a href="{{route('admin.create')}}"><button type="button" class="btn btn-success">Add Admins</button></a>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        @endsection