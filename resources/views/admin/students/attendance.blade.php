@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-3 ">
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">

		                <div class="col-md-12">
		                    <h4>Your wards attendace on: </h4>
		                    <hr>
		                </div>
		            </div>
                    
                <div>
                <div>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($att as $at)
                          <tr>
                                <th> {{ $at['date'] }}</th>
                                <th> {{ $at['status'] }}</th>
                    
                            </tr>
                      @endforeach
                    
                      
                    </tbody>
                </table>
                    
                </div>

		            <div >
		                <div class="col-md-12">
                        <div class="row">
                        <div>
                    
                        </div>
                        <div>
                            &nbsp;    
                        <div>
                        </br></br></br>
                                <div class="float-left" >
                                  <button name="submit" type="submit" class="btn btn-primary" onclick="window.location='{{ route("home") }}'">Back</button>
                                </div>
		                </div>
		            </div>   
		        </div>
		    </div>
		</div>
	</div>
</div>
    
</body>
</html>

<!------ Include the above in your HEAD tag ---------->


@endsection
