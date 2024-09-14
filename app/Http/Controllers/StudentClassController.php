<?php 

namespace App\Http\Controllers;

use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
public function index()
{
$student_classes = StudentClass::all();
return view('student_classes.index', compact('student_classes'));
}

public function create()
{
return view('student_classes.create');
}

public function store(Request $request)
{
$request->validate(['name' => 'required']);
StudentClass::create($request->all());

return redirect()->route('student_classes.index')->with('success', 'Class created successfully!');
}

public function show(StudentClass $student_class)
{
return view('student_classes.show', compact('student_class'));
}

public function edit(StudentClass $student_class)
{
return view('student_classes.edit', compact('student_class'));
}

public function update(Request $request, StudentClass $student_class)
{
$request->validate(['name' => 'required']);
$student_class->update($request->all());

return redirect()->route('student_classes.index')->with('success', 'Class updated successfully!');
}

public function destroy(StudentClass $student_class)
{
$student_class->delete();
return redirect()->route('student_classes.index')->with('success', 'Class deleted successfully!');
}
}