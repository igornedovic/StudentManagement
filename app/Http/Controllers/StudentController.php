<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
        $students = Student::all();

        return response()->json($students, 200);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return response()->json($student, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($student_id)
    {
        $student = Student::find($student_id);

        if(is_null($student))
        {
            return response()->json("Student with given id is not found", 404);
        }

        return response()->json($student, 200);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $student_id)
    {
        $student = Student::find($student_id);

        if(is_null($student))
        {
            return response()->json("Student with given id is not found", 404);
        }

        foreach($request->all() as $key => $value)
        {
            $student[$key] = $value;
        }

        $student->save();
        return response()->json($student, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($student_id)
    {
        $student = Student::find($student_id);

        if(is_null($student))
        {
            return response()->json("Student with given id is not found", 404);
        }

        $student->delete();
        return response()->json("Successfully deleted", 200);
    }
}
