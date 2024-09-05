<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index(){
        return Student::all();
    }
    public function store(){

        $student = Student::create([
            'name' => 'Student 2',
            'tp' => '12345'
        ]);

        return $student;
    }
}
