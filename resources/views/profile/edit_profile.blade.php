@extends('layouts.master')
@section('content')


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> User information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           user edit form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form-control" action="{{route('profile.update',[Auth->User->id])}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                    <div class="form-group">
                                            
                                    
                                    <img src="{{asset('backend/image/'.Auth->User->image)}}" style="height:auto; width:50px;"><br><br>
                                            <input type="file" name="image">
                                            <input type="hidden" value="{{Auth->User->image}}" name="id" >
                                    </div>

                                        <div class="form-group">
                                           
                                            <input value="{{Auth->User->adminname}}" name="adminname" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            
                                            <input value="{{Auth->User->state}}" name="state" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            
                                            <input value="{{Auth->User->country}}" name="country" required>
                                        </div>


                                        <div class="form-group">
                                            
                                     <input value="{{Auth->User->email}}" name="email" required>
                                        </div>

                                       
                                        
                                        <input type="submit" class="btn btn-success" value="update">
                                        
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>