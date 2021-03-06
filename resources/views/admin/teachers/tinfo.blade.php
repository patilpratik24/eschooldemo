@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Teachers Info</div>

                <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Subjects Taught</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($teachers as $teacher)
                          <tr>
                                <th> {{ $teacher['tid'] }}</th>
                                <th> {{ $teacher['tname'] }}</th>
                                <th> {{ $teacher['temail'] }}</th>
                                <th> {{ $teacher['tphone'] }}</th>
                                <th> {{ $teacher['subs'] }}</th>

                              </tr>
                      @endforeach
                    
                      
                    </tbody>
                </table>
               
                <div class="float-left" >
                                  <button name="submit" type="submit" class="btn btn-primary" onclick="window.location='{{ route("home") }}'">Back</button>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
