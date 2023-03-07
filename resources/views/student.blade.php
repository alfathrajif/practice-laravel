@extends('layouts.app')
@section('title', 'Students')
@section('content')
<h1 class="display-4 mb-4">Students</h1>
<div class="d-flex justify-content-between">
    <a href="/student-add" class="btn btn-primary mb-3">Tambah Students</a>
    <a href="/student-deleted" class="btn btn-info mb-3">Show Deleted Data</a>
</div>

@if (Session::has('status'))
<div class="alert alert-success" role="alert">
    {{ Session::get('message') }}
</div>
@endif

<form action="" class="col-md-4">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="keyword" placeholder="Find something good!">
        <button type="submit" class="btn btn-primary" id="basic-addon1">Search</button>
    </div>
</form>

<table class="table table-responsive">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>NIS</th>
            <th>Class</th>
            @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
            @else
            <th>Action</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->nis }}</td>
            <td>{{ $student->class->name }}</td>
            @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
            @elseif (Auth::user()->role_id != 1 )
            <td>
                <a href="/student/{{ $student->slug }}">Detail</a>
            </td>
            @else
            <td>
                <a href="/student/{{ $student->slug }}">Detail</a>
                <a href="/student-edit/{{ $student->id }}">Edit</a>
                <a href="/student-delete/{{ $student->id }}">Delete</a>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>

{{ $students->withQueryString()->links() }}
@endsection
