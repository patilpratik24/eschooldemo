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
                    @hasrole(('student'))
		                <div class="col-md-12">
		                    <h4>Your overall grade</h4>
		                    <hr>
		                </div>
                    @endhasrole

                    @hasrole(('parent'))
		                <div class="col-md-12">
		                    <h4>Your wards overall grade</h4>
		                    <hr>
		                </div>
                    @endhasrole
		            </div>
		            <div >
		                <div class="col-md-12">
                        <div class="row">
                        <div>
                            &nbsp;    <h1> {{ $students['grade'] }} <h1>
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
