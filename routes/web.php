<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', function(){
        return 'Welcome Admin/Principal';
})->middleware(['auth', 'auth.admin']);

Route::resource('users', 'Admin\UserController', ['except' =>['show', 'create', 'store']]);

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
    Route::resource('/users', "UserController", ['except' => ['show', 'create', 'store']]);

});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/students', "StudentController", ['except' => ['show', 'create', 'store']]);

});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/teachers', "TeacherController", ['except' => ['show', 'create', 'store']]);

});

Route::get('/teachers/mytinfo', 'Admin\TController@showmytinfo')->name('admin.teachers.mytinfo');

Route::get('/teachers/showallstudents', 'Admin\TController@showallstudents')->name('admin.teachers.showallstudents');

Route::get('/teachers/markgrade', 'Admin\TController@markgrades')->name('admin.teachers.markgrade');

Route::get('/teachers/markattendance', 'Admin\TController@markattendance')->name('admin.teachers.markattendance');

Route::get('/students/showgrade', 'Admin\TController@showgrade')->name('admin.students.showgrade');

Route::get('/students/studymaterial', 'Admin\TController@studymaterial')->name('admin.students.studymaterial');

Route::get('/students/attendance', 'Admin\TController@showattendance')->name('admin.students.attendance');

Route::get('/parents/showmystudent', 'Admin\TController@showmystudent')->name('admin.parents.showmystudent');

Route::get('/parents/showmygrade', 'Admin\TController@showmygrade')->name('admin.parents.showmygrade');

Route::get('/teachers/markgrade/grade', 'Admin\TController@grade');

Route::get('teachers/markattendance/mka', 'Admin\TController@mka')->name('mka');






