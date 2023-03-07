@extends('layouts.app')
@section('title', 'Student Delete Confirm')
@section('content')
<h1 class="display-4 mb-3">Yakin ingin menghapus, {{ $student->name }} ({{ $student->nis }})</h1>
<form action="/student-destroy/{{ $student->id }}" method="post" class="d-inline-block">
  @csrf
  @method('delete')
  <button type="submit" class="btn btn-danger">Delete</button>
</form>
<a href="/students" class="btn btn-secondary">Cancel</a>
</table>
@endsection
