@extends('layouts.master')
@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Store Table</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Store Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                             
                                            <th>Sno</th>
                                            <th>Store Name </th>
                                            <th>address</th>
                                            <th>phone</th>
                                            <th>E-mail</th>
                                            <th>details</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       @foreach($store as $store)
                                        <tr class="odd gradeX">

                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$store->storename}}</td>
                                            <td class="center">{{$store->address}}</td>
                                            <td class="center">{{$store->phone}}</td>
                                            <td class="center">{{$store->email}}</td>
                                            <td class="center">{{$store->details}}</td>
                                            <td class="center">{{$store->status}}</td>
                                            <td class="center"><a href ="{{route('Store.edit',[$store->id])}}"><button type="button" class="btn btn-sm">Edit</button></a>
                                            <form role="form" method="post" action="{{route('Store.destroy',[$store->id])}}">
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
     
            <a href="{{route('Store.create')}}"><button type="button" class="btn btn-success">Add Store</button></a>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        @endsection