@extends('layouts.app')
@section('title', $student->name)
@section('content')
<div class="mb-5">
  <div class="d-flex align-items-center gap-4">
    @if ($student->image != null)
    <img src="{{ asset('storage/photo/' . $student->image ) }}" alt="{{ $student->image }}" width="70"
      class="rounded-circle img-thumbnail mb-3">
    @else
    <img src="{{ asset('storage/photo/noPhoto.jpeg' ) }}" alt="{{ $student->image }}" width="70"
      class="rounded-circle img-thumbnail mb-3">
    @endif
    <h1 class="display-4 mb-3">{{ $student->name }}</h1>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>NIS</th>
        <th>Gender</th>
        <th>Class</th>
        <th>Hoomroom Teacher</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>{{ $student->nis }}</th>
        <td>
          @if ($student->gender == "P")
          Perempuan
          @else
          Laki - Laki
          @endif
        </td>
        <td>{{ $student->class->name }}</td>
        <td>{{ $student->class->homeRoomTeacher->name }}</td>
      </tr>
    </tbody>
  </table>
</div>
<h2 class="display-6 mb-3 fs-2">Extracurricular</h2>
<ul>
  @foreach ($student->extracurriculars as $extracurricular)
  <li>{{ $extracurricular->name }}</li>
  @endforeach
</ul>
@endsection
