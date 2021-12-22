<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentExamController extends Controller
{
    public function index($student_id)
    {
        $exams = DB::table('grades')
                    ->where('grades.student_id', $student_id)
                    ->join('students', 'grades.student_id', '=', 'students.id')
                    ->join('exams', 'grades.exam_id', '=', 'exams.id')
                    ->select('exams.name', 'exams.semester', 'grades.mark')
                    ->get();
        
        if(is_null($exams) || $exams->isEmpty())
        {
            return response()->json('Exams not found', 404);
        }
        
        return response()->json($exams, 200);
    }
}
