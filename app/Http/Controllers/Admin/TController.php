<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\Parents;
use App\Teacher;
use App\Attendance;
use DB; 

class TController extends Controller
{
    public function myinfo()
    {
        
    }

    public function showallstudents(){
    
        $students = Student::all()->toArray();
        return view('admin.students.showall', compact('students'));

    }

    public function markgrades(){
        
        $students = Student::all()->toArray();
        return view('admin.teachers.markgrade', compact('students'));

    }

    public function markattendance(){

        $students = Student::all()->toArray();
        //dd($students[0]);
        return view('admin.teachers.markattendance', compact('students'));

    }

    public function showgrade(){

        $user = auth()->user();
        $nm = $user->name;

        $students = Student::where('sname', $nm)->first();
        return view('admin.students.showgrade', compact('students'));
    }

    public function studymaterial(){

        return view('admin.students.studymaterial');
    }

    public function showattendance(Request $request){

        $user = auth()->user();
        $nm = $user->name;
       
        $placeid = Parents::where('pname', $nm)->pluck('sid')->first();

        $att = Attendance::all()->where('sid', $placeid);
        //dd($att);
        return view('admin.students.attendance', compact('att'));
        
    }

    public function showmygrade(){

        $user = auth()->user();
        $nm = $user->name;
        $placeid = Parents::where('pname', $nm)->pluck('sid')->first();
        //dd($placeid);

        $students = Student::where('sid', $placeid)->first();
        //$parinfo = Parents::where('sid',$placeid)->first();
        //dd($students);
        return view('admin.parents.showmygrade', compact('students'));

    }

    public function showmystudent(){

        $user = auth()->user();
        $nm = $user->name;
        $placeid = Parents::where('pname', $nm)->pluck('sid')->first();
        //dd($placeid);

        $students = Student::where('sid', $placeid)->first();
        //$parinfo = Parents::where('sid',$placeid)->first();
        //dd($students);
        return view('admin.parents.showmystudent', compact('students'));

    }

    public function showmytinfo(){

        $user = auth()->user();
        $nm = $user->name;
        $teachers = Teacher::where('tname', $nm)->first();
        //dd($teachers);
        return view('admin.teachers.mytinfo', compact('teachers'));

    }

    public function grade(Request $request){

       
        $placeid = $request->get('sid');
        $placegrade = $request->get('mg');

        DB::table('students')
        ->where('sid', $placeid)
        ->update(['grade' => $placegrade]);
        //dd($placeid);

        return redirect('/teachers/markgrade');

        


    }

    public function mka(Request $request){

        $students = Student::all()->toArray();
       
        $placedate = $request->get('mg');
        
        
        
       
        
        //DB::table('attendances')->insert(['sid' => $placeid, 'date' => $placedate, 'status' => $placestat]);
        
        $ct = count($students);
        for($i=0; $i<$ct; $i++)
        {
            $placeid = $students[$i]['sid'];
            $temp = ('stat'.$students[$i]['sid']);
            $status = $request->get($temp);
            DB::table('attendances')->insert(['sid' => $placeid, 'date' => $placedate, 'status' => $status]);
            
        }

        
        return redirect('/teachers/markattendance');

        


    }

}
