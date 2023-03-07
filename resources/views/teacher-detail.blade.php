@extends('layouts.app')
@section('title', 'Students')
@section('content')
<h1 class="display-4 mb-3">{{ $teacher->name }}</h1>
<table class="table table-border">
  <thead>
    <tr>
      <th>Class</th>
      <th>Students</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @if ($teacher->class)
      <td>{{ $teacher->class->name }}</td>
      <td>
        @foreach ($teacher->class->students as $student)
        {{ $student->name }} <br>
        @endforeach
      </td>
      @else
      <td colspan="2">Tidak ada kelas</td>
      @endif
    </tr>
  </tbody>
</table>
</table>
@endsection
