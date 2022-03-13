<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('ValidTeacher');
    }

    public function studentcreate()
    {
        return view('pages.student.studentcreate');
    }

    public function studentcreateSubmitted(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required|min:5|max:10',
            'id'=>'required',
            'email'=>'email',
            'password'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 charcters'
        ]
            );
         $student = new Student;
         $student->name = $request->name;
         $student->student_id = $request->id;
         $student->email = $request->email;
         $name = $request->name;
         $student->save();
        return $student;

    }

    public function studentlist()
    {
        $student = Student::all();
        // for($i=0; $i<10; $i++){
        //     $student=array(
        //         "name"=>"Student ".($i+1),
        //         "id"=>"19-40179-1".($i+1),
        //         "dob"=>"08-02-2000"
        //     ); 
        //     $students[]=(object)$student;           
        // }
        // return view('pages.student.list')->with('students',$students);

        // return $student;
        return view('pages.student.list')->with('students',$student);
    }

    public function studentedit(Request $request)
    {
        $student = Student::where('id', $request->id)->first();

        // return $student;
        return view('pages.student.studentedit')->with('student', $student);
    }

    public function studentEditSubmitted(Request $request){

        $student = Student::where('id', $request->id)->first();

        // return $request->id;
        $student->name = $request->name;
        $student->student_id = $request->student_id;
        $student->email = $request->email;
        $student->save();

        return redirect()->route('studentlist   ');
    }

    public function studentDelete(Request $request){
        $student = Student::where('id', $request->id)->first();
        $student->delete();
        
        return redirect()->route('studentlist');
    }

    //login
    public function login()
    {
        return view('pages.student.login');
    }

    public function loginset(Request $request)
        
    {
        $validate = $request->validate([

                'email'=>'required',
                'password'=>'required'
            ],
            [
                'email.required'=>'Please enter your Email !',
                'password.required'=>'Please enter your Password !'
            ]);
        return "Login successfully !";
    }

    //registration
    public function registration()
    {
        return view('pages.student.registration');
    }

    public function checkregistration(Request $request)
    {
        $validate = $request->validate([
                'name'=>'required',
                'id'=>'required',
                'email'=>'required',
                'password'=>'required',
                'dob'=>'required'
            ],
            [
                'name.required'=>'Please enter your Name !',
                'id.required'=>'Please enter your ID !',
                'email.required'=>'Please enter your Email !',
                'password.required'=>'Please enter your Password !',
                'dob.required'=>'Please enter your Date of Birth !'
            ]);
        return "Information Added !";
    }

    //contact
    public function contact()
    {
        return view('pages.student.contact');
    }

    public function checkcontact(Request $request)
    {
        $validate = $request->validate([
                'mobile'=>'required',
                'fb'=>'required',
                'email'=>'required'
            ],
            [
                'mobile.required'=>'Please enter your Mobile number !',
                'fb.required'=>'Please enter your Facebook Link !',
                'email.required'=>'Please enter your Email !'
            ]);
        return "Contact Info Added !";
    }


}
