<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
  public function index()
  {
    $teachers = Teacher::get();
    return view('teachers', [
      'teachers' => $teachers
    ]);
  }
  public function show($id)
  {
    $teacher = Teacher::with('class.students')->findOrFail($id);
    return view('teacher-detail', [
      'teacher' => $teacher
    ]);
  }
}
