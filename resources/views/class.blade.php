@extends('layouts.app')
@section('title', 'Students')
@section('content')
<h1>Selamat Datang</h1>
<table class="table">
  <thead>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($classList as $class)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $class->name }}</td>
      <td><a href="/class/{{ $class->id }}">Detail</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
