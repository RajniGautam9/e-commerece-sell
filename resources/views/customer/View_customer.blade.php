@extends('layouts.master')
@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Customer Table</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Customer Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>Sno </th>
                                            <th>Customer Name </th>
                                            <th>Address</th>
                                            <th>state</th>
                                            <th>country</th>
                                            <th>E-mail</th>
                                            <th>postalcode</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($customer as $customer)
                                        <tr class="odd gradeX">
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$customer->customername}}</td>
                                            <td>{{$customer->address}}</td>
                                            <td>{{$customer->state}}</td>
                                            <td>{{$customer->country}}</td>
                                            <td>{{$customer->email}}</td>
                                            <td>{{$customer->postalcode}}</td>
                                            <td>{{$customer->status}}</td>
                                           <td><a href="{{route('customer.edit',[$customer->id])}}"> <button type="button" class="btn btn-sm">Edit</button></a>
                                           <form role="form" method="post" action="{{route('customer.destroy',[$customer->id])}}">
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
     
            <a href="{{route('customer.create')}}"><button type="button" class="btn btn-success">Add customer</button></a>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        @endsection