<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Course;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    
    public function studentCreate()
    {
        return view('pages.student.studentCreate');
    }

    public function studentCreateSubmitted(Request $request){
        $validate = $request->validate(
            [
                'name'=>'required|min2|max:10',
                'phone'=>'required',
                'password'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'

            ],

            [
                'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 charcters'
            ]
            );
        $student = new Student();
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->password = $request->password;
        $student->save();
        return $student;
        // return redirect()->route('teacherList');
    }

    public function studentList(){
        $students = Student::all();
        return view('pages.Student.studentList')->with('students', $students);
    }

    public function studentCourses(Request $request){

        $t = Student::where('id',$request->id)->first();
        // return $t->id;
        //hasmany
        // return $t->courses;

        //eloquent
        return $t->assignedCourses();
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
        $student->phone = $request->phone;
        $student->password = $request->password;
        $student->save();

        return redirect()->route('studentList');
    }

    public function studentDelete(Request $request){
        $student = Student::where('id', $request->id)->first();
        $student->delete();
        
        return redirect()->route('studentList');
    }
}
