@extends('layouts.app')
@section('title', 'Students')
@section('content')
<h1 class="display-4 mb-4">Students Edit</h1>
<div class="col-md-6">
  <form action="/student/{{ $student->id }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="name" class="form-label">Student Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
    </div>
    <div class="mb-3">
      <label for="nis" class="form-label">NIS</label>
      <input type="text" class="form-control" id="nis" name="nis" value="{{ $student->nis }}">
    </div>
    <div class="mb-3">
      <label class="form-check-label mb-2" for="exampleRadios1">
        Gender
      </label>
      <div class="d-flex gap-3">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="l" value="L" @if ($student->gender == 'L')
          checked @endif>
          <label class="form-check-label" for="l">
            Laki - Laki
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="p" value="P" @if ($student->gender == 'P')
          checked @endif>
          <label class="form-check-label" for="p">
            Perempuan
          </label>
        </div>
      </div>
    </div>
    <select class="form-select mb-3" aria-label="Default select example" name="class_id">
      <option value="">Select One</option>
      @foreach ($classRooms as $class)
      <option value="{{ $class->id }}" @if ($class->id == $student->class->id) selected @endif>
        {{ $class->name }}
      </option>
      @endforeach
    </select>
    <button type="submit" class="btn btn-success">Save</button>
  </form>
</div>
@endsection
