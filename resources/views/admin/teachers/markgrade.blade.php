@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>
<body>

{{-- Start Add Modal --}}
<div class="modal fade" id="grade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="/teachers/markgrade/grade" method="GET" id="gradeform">
    {{ csrf_field() }}
    {{ method_field('POST') }}
    

      <div class="modal-body">
      

      <div class="form-group">
          <label>ID</label>
          <input type="text" name="sid" id="sid" class="form-control" placeholder="Enter Student ID Here">
        </div>

        <div class="form-group">
          <label>Grade</label>
          <input type="text" name="mg" id="mg" class="form-control" placeholder="Enter Grade Here">
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Mark</button>
      </div>
    </form> 
    </div>
  </div>
</div>
{{-- End Add Modal --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Grade Students</div>

                <div id= "datatable" class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Grade</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <div>
                    @foreach ($students as $student)
                          <tr>
                                <th> {{ $student['sid'] }}</th>
                                <th> {{ $student['sname'] }}</th>
                                <th> {{ $student['semail'] }}</th>
                                <th> {{ $student['grade'] }}</th>
                                <th>
                                
                                    
                                   
                                </th>   
                             </tr>
                      @endforeach
                      </div>
                    
                      
                    </tbody>
                </table>

                <div class="float-left" >
                     <button name="submit" type="submit" class="btn btn-primary" onclick="window.location='{{ route("home") }}'">Back</button>
                     <button class="btn btn-success edit" data-toggle="modal" data-target="#grade">
                                        Mark
                                    </button>
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

