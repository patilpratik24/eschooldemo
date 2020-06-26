@extends('layouts.app')

@section('content')
    @hasrole('student')
        <div class="nav flex-column nav-pills float-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" onclick="window.location='{{ route("admin.students.index") }}'" role="tab" aria-controls="v-pills-home" aria-selected="true">Your Profile</a>
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" onclick="window.location='{{ route("admin.teachers.index") }}'" role="tab" aria-controls="v-pills-profile" aria-selected="false">Teachers Info</a>
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" onclick="window.location='{{ route("admin.students.showgrade") }}'" role="tab" aria-controls="v-pills-messages" aria-selected="false">Grades</a>
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" onclick="window.location='{{ route("admin.students.studymaterial") }}'" role="tab" aria-controls="v-pills-settings" aria-selected="false">Study Material</a>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"></div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"></div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"></div>
        </div>
    @endhasrole

    @hasrole('parent')
        <div class="nav flex-column nav-pills float-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" onclick="window.location='{{ route("admin.parents.showmystudent") }}'" role="tab" aria-controls="v-pills-home" aria-selected="true">Students Profile</a>
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" onclick="window.location='{{ route("admin.teachers.index") }}'" role="tab" aria-controls="v-pills-profile" aria-selected="false">Teachers Info</a>
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" onclick="window.location='{{ route("admin.parents.showmygrade") }}'" role="tab" aria-controls="v-pills-messages" aria-selected="false">Grades</a>
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" onclick="window.location='{{ route("admin.students.attendance") }}'" role="tab" aria-controls="v-pills-settings" aria-selected="false">Attendance</a>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"></div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"></div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"></div>
        </div>
    @endhasrole

    @hasrole('teacher')
        <div class="nav flex-column nav-pills float-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" onclick="window.location='{{ route("admin.teachers.mytinfo") }}'"  role="tab" aria-controls="v-pills-home" aria-selected="true">Your Profile</a>
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" onclick="window.location='{{ route("admin.teachers.showallstudents") }}'"  role="tab" aria-controls="v-pills-profile" aria-selected="false">Students</a>
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" onclick="window.location='{{ route("admin.teachers.markgrade") }}'" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mark Grades</a>
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" onclick="window.location='{{ route("admin.teachers.markattendance") }}'" role="tab" aria-controls="v-pills-settings" aria-selected="false">Mark Attendance</a>
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" onclick="window.location='{{ route("admin.teachers.markattendance") }}'" role="tab" aria-controls="v-pills-settings" aria-selected="false">Add Study Material</a>

        </div>
        <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"></div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"></div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"></div>
        </div>
    @endhasrole




    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
