@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
		<div class="col-md-3 ">
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                        <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                        <label style="font-weight:bold;">Name</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                           {{$teachers['tname']}}
                                        </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">ID</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                        {{$teachers['tid']}}

                                        </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Email</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                        {{$teachers['temail']}}

                                        </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Contact</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                        {{$teachers['tphone']}}

                                        </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Subjects Taught</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                        {{$teachers['subs']}}

                                        </div>
                                        </div>
                                        <hr />

                                        
                                <div class="float-left" >
                                  <button name="submit" type="submit" class="btn btn-primary" onclick="window.location='{{ route("home") }}'">Back</button>
                                </div>

                                <div class="float-left">
                                  &nbsp<button name="submit" type="submit" class="btn btn-primary">Edit Data</button>
                                </div>

                                
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
@endsection
