@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Role</title>
</head>
<body>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage {{$user->name }}</div>

                <div class="card-body">
                
                <form action="{{ route('admin.users.update', ['user'=>$user->id])}}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    @foreach($roles as $role)
                        <div class="form-check">
                            <input type="checkbox" onclick="checkOnlyOne(this.value);" name="roles[]" value="{{$role->id}}"
                                {{ $user->hasAnyRole($role->name)? 'checked':'' }}>
                            <label>{{ $role->name}}</label>
                        </div>

                    @endforeach
                    <button type="submit" class="btn btn-primary"> 
                    Update Role
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function checkOnlyOne(b){

var x = document.getElementsByClassName('daychecks');
var i;

for (i = 0; i < x.length; i++) {
  if(x[i].value != b) x[i].checked = false;
}
}
</script>

@endsection


    
</body>
</html>
