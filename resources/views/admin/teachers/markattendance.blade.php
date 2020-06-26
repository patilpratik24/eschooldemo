@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>



@section('content')
<form action="/teachers/markattendance/mka">
                  <div>
                  <p>Date: <input name="mg" type="text" id="datepicker"></p>
                </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        
            <div class="card">
                <div class="card-header">Mark Attendance</div>
                
                <div id= "datatable" class="card-body">
                <div class="table-responsive col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Attendance</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                    <div>
                    
                    @foreach ($students as $student)
                            <tr>
                                <th> {{ $student['sid'] }}</th>
                                <th> {{ $student['sname'] }}</th>
                                <th> {{ $student['semail'] }}</th>  
                   
                                <div>
                                <th>
                               
                                <input type="radio" id="present" name="stat{{ $student['sid'] }}" value="present">
                                <label for="present">Present</label><br>
                                <input type="radio" id="absent" name="stat{{ $student['sid'] }}" value="absent">
                                <label for="absent">Absent</label><br> 
                          
                                </th>
                                </th>
                                </div>
                            </tr>
                            @endforeach  
                      
                      </div>
                    
                      
                    </tbody>
                </table>
                

                

                <div class="float-left" >
                     <button  class="btn btn-primary" onclick="window.location='{{ route("home") }}'">Back</button>
                     <button type="submit" class="btn btn-success edit" >
                       Mark Attendance
                     </button>
                     </form>
                </div>  
            </div>
        </div>
        
    </div>
</div>
@endsection
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

</body>
</html>

