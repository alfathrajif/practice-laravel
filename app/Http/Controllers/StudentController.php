<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentCreateRequest;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $student = Student::with(['class'])->where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('gender', $keyword)
            ->orWhere('nis', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('class', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(15);

        return view('student', [
            'students' => $student,
        ]);
    }

    public function show($slug)
    {
        $student = Student::with(['class.homeRoomTeacher', 'extracurriculars'])->where('slug', $slug)->first();
        return view('student-detail', [
            'student' => $student
        ]);
    }

    public function create()
    {
        $classRooms = ClassRoom::select('id', 'name')->get();
        return view('create-student', [
            'classRooms' => $classRooms
        ]);
    }

    public function store(StudentCreateRequest $request)
    {
        $newName = '';
        if ($request->file('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
            $request->file('photo')->storeAs('photo', $newName);
        }

        $request['image'] = $newName;
        $student = Student::create($request->all());

        if ($student) {
            Session::flash('status');
            Session::flash('message', 'Student created successfully');
        }

        return redirect('/students');
    }

    public function edit($id)
    {
        $classRooms = ClassRoom::select('id', 'name')->get();
        $student = Student::findOrFail($id);
        return view('student-edit', [
            "student" => $student,
            "classRooms" => $classRooms
        ]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect('/students');
    }

    public function delete($id)
    {
        $student = Student::findOrFail($id);
        return view('student-delete', [
            'student' => $student
        ]);
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        if ($student) {
            Session::flash('status');
            Session::flash('message', 'Student ' . $student->name . ' deleted successfully');
        }
        return redirect('/students');
    }

    public function studentDeleted()
    {
        $deletedStudents = Student::onlyTrashed()->get();
        return view('student-deleted-list', [
            "deletedStudents" => $deletedStudents
        ]);
    }

    public function restore($id)
    {
        $deletedStudents = Student::withTrashed()->where('id', $id)->restore();
        if ($deletedStudents) {
            Session::flash('status');
            Session::flash('message', 'Student restore successfully');
        }
        return redirect('/students');
    }

    // public function massUpdate()
    // {
    //     $student = Student::all();
    //     collect($student)->map(function ($item) {
    //         $item->slug = Str::slug($item->name);
    //         $item->save();
    //     });
    // }
}
