@extends('layouts.master')
@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Employee Table</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Employee Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>Sno </th>
                                            <th>Employee_name </th>
                                            <th>image</th>
                                            <th>Address</th>
                                            <th>phone</th>
                                            <th>E-mail</th>
                                            <th>citizen_no</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($employee as $employee)
                                        <tr class="odd gradeX">
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$employee->employeename}}</td>
                                            <td><img src="{{asset('backend/image/'.$employee->image)}}" style="height:auto; width:50px;"></td>
                                            <td>{{$employee->Address}}</td>
                                            <td>{{$employee->phone}}</td>
                                            <td>{{$employee->email}}</td>
                                            <td>{{$employee->citizen_no}}</td>
                                            <td>{{$employee->status}}</td>
                                           <td><a href="{{route('Employee.edit',[$employee->id])}}"> <button type="button" class="btn btn-sm">Edit</button></a>
                                           <form role="form" method="post" action="{{route('Employee.destroy',[$employee->id])}}">
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
     
            <a href="{{route('Employee.create')}}"><button type="button" class="btn btn-success">Add Employee</button></a>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        @endsection