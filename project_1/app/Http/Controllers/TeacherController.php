<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();

        return view('teacher.list',compact('teachers'));
        

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Teacher::create([
            'name' =>$request-> name,
            'tp' => $request->tp
        ]);
        return $student;
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        
        return view('teacher.update',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
       
        $teacher->update([
            'name'=>$request->name,
            'tp'=>$request->tp
        ]);

        return $teacher;
    
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $res = $teacher->delete();

        if($res){
            return redirect()->back()->with('msg','Success');
        }else{
            return redirect()->back()->with('msg','error');
        }
    }
}
