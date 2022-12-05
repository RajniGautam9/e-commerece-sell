@extends('layouts.master')
@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> User information </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       <div class="panel-heading" style="background-color: aqua;">
                      <h2> User Profile</h2>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   

                                        <div class="form-group">
                                            <!-- <label>userimage</label> -->
                                            <img src="{{asset('backend/image/'.Auth()->User()->image)}}" style="height:auto; width:50px;">
                                            
                                        </div>
                                        


                                        <div class="form-group">
                                           <h2> <label>{{Auth()->User()->adminname}}</label></h2>
                                            
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>{{Auth()->User()->state}}</label>
                                            
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>{{Auth()->User()->country}}</label>
                                            
                                        </div>


                                        <div class="form-group">
                                            <label>{{Auth()->User()->email}}</label>
                                            
                                        </div>
                                       
                                      
                                     <a href="{{route('profile.edit'),'[$user->id]'}}"><button type="button" class="btn btn-success">Edit</button></a>
                                        
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
               @endsection         