@extends('layouts.app')
@section('title', 'Extracurricular')
@section('content')
<h1>Selamat Datang</h1>
<table class="table table-responsive">
  <thead>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($extracurriculars as $extracurricular)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $extracurricular->name }}</td>
      <td>
        <a href="/extracurricular/{{ $extracurricular->id }}">Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
