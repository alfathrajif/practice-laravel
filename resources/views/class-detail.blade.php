@extends('layouts.app')
@section('title', 'Class Detail')
@section('content')
<h1 class="display-4 mb-4">Sedang di kelas {{ $class->name }}</h1>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Students</th>
      <th>Hoomroom Teacher</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        @foreach ($class->students as $students)
        {{ $students->name }}<br>
        @endforeach
      </td>
      <td>{{ $class->homeRoomTeacher->name }}</td>
    </tr>
  </tbody>
</table>
@endsection
