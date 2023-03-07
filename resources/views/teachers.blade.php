@extends('layouts.app')
@section('title', 'Students')
@section('content')
<h1 class="display-4 mb-3">List of Teachers</h1>
<table class="table">
  <thead>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($teachers as $teacher)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $teacher->name }}</td>
      <td><a href="/teacher/{{ $teacher->id }}">Detail</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
