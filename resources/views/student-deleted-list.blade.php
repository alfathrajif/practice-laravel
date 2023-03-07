@extends('layouts.app')
@section('title', 'Student Deleted List')
@section('content')
<h1>Ini halaman delete list</h1>
<table class="table table-responsive">
  <thead>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Gender</th>
      <th>NIS</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($deletedStudents as $student)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $student->name }}</td>
      <td>{{ $student->gender }}</td>
      <td>{{ $student->nis }}</td>
      <td>
        <a href="/student/{{ $student->id }}/restore">Restore</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
