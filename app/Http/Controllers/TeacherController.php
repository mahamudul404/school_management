<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    public function create(){
        return view('teachers.create');
    }

    public function store (Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:254',
            'email' => 'required|email|unique:teachers',
            'phone' => 'required|string|min:6|max:20',
        ]);

        Teacher::create($validatedData);
        return redirect()->route('teachers.index')->with('success', 'Teacher added successfully');
    }

    public function edit(Teacher $teacher){
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher){
        $validatedData = $request->validate([
            'name' => 'required|max:254',
            'email' => 'required|email',
            'phone' => 'required|string'
        ]);

        $teacher->update($validatedData);
        return redirect()->route('teachers.index')->with('success', 'Teacher Updated successfully');
    }

    public function destroy(Teacher $teacher){
         
        $teacher->delete();
        return redirect()->route('teachers.index');
    }
}
