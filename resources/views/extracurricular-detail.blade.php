@extends('layouts.app')
@section('title', 'asdsad')
@section('content')
<div class="mb-5">
  <h1 class="display-4 mb-3">Extracurricular {{ $extracurricular->name }}</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Gender</th>
        <th>Class</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($extracurricular->students as $students)
      <tr>
        <td>{{ $students->name }}</td>
        <td>
          @if ($students->gender == "P")
          Perempuan
          @else
          Laki - Laki
          @endif
        </td>
        <td>{{ $students->class->name }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
