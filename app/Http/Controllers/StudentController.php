<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StudentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getStudents(){
        return Student::all();
    }
    public function showStudents(){
        $student=Student::all();
        return view("students", compact('Student'));
    }
    public function getStudentById($id)
    {
        // Get the student from the database
        $student = Student::find($id);

        // If student exists, return the data. Otherwise, return "Student not found"
        if ($student) {
            return response()->json($student);
        } else {
            return response()->json(['error' => 'Student not found'], 404);
        }
    }
}
