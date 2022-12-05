@extends('layouts.master')
@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">payment Table</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           payment Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>Sno </th>
                                            <th>Employee name </th>
                                            <th>Depart_name </th>
                                            <th>Degi_name </th>
                                            <th>phone</th>
                                            <th>E-mail</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($payment as $payment)
                                        <tr class="odd gradeX">
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$payment->employee->employeename}}</td>
                                            <td>{{$payment->department->departmentname}}</td>
                                            <td>{{$payment->degination->deginationname}}</td>
                                            <td>{{$payment->phone}}</td>
                                            <td>{{$payment->email}}</td>
                                            <td>{{$payment->status}}</td>
                                           <td><a href="{{route('payment.edit',[$payment->id])}}"> <button type="button" class="btn btn-sm">Edit</button></a>
                                           <form role="form" method="post" action="{{route('payment.destroy',[$payment->id])}}">
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
     
            <a href="{{route('payment.create')}}"><button type="button" class="btn btn-success">Add payment</button></a>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        @endsection
        