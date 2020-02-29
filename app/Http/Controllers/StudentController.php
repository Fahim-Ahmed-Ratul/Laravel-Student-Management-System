<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

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
        $students=Student::all();
        return view('index')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd('Submitted');
        //check validity
        $this->validate($request,[
          'name' => 'required|string|max:10',
          'registration' =>'required|integer',
          'department' =>'required|string',
          'info' =>'nullable'

        ]);

        $student=new Student;
        $student->name=$request->name;
        $student->registration_id=$request->registration;
        $student->department_name=$request->department;
        $student->info=$request->info;
        $student->save();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student=Student::find($id);
        return view('edit')->with('student',$student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $student=Student::find($id);

        $student->name=$request->name;
        $student->registration_id=$request->registration;
        $student->department_name=$request->department;
        $student->info=$request->info;
        $student->save();

        return redirect()->route('index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $student=Student::find($id);
        $student->delete();

        return redirect()->route('index');
    }
}
