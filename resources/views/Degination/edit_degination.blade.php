@extends('layouts.master')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Degination</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Degination Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="{{route('Degination.update',[$degination->id])}}">
                                    @csrf
                                    @method('PUT') 

                                    <div class="form-group">
                                            <label>Department Name</label>
                                            <select id="select" class="form-control" name="department_id" type="text">
                                                @foreach($department as $departments)
                                                <option value="{{$departments->id}}">{{$departments->departmentname}}</option>
                                                @endforeach
                                            </select>
                                           
                                           
                                        </div>
                                        
                                     
                                        <div class="form-group">
                                            <label>Degination Name</label>
                                            <input class="form-control" name="deginationname" type="text" value="{{$degination->deginationname}}" required>
                                            
                                        </div>
                                        
                                        
                                      
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select id="select" class="form-control" name="status" value="{{$degination->status}}">
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
