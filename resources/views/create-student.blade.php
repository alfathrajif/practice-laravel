@extends('layouts.app')
@section('title', 'Add New Student')
@section('content')
<h1 class="display-4 mb-4">Add New Student</h1>
<div class="col-md-6">
  <form action="student" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Student Name</label>
      <input type="text" class="form-control mb-1" id="name" name="name">
      @error('name')
      <div class="text-danger fw-semibold">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class=" mb-3">
      <label for="nis" class="form-label">NIS</label>
      <input type="text" class="form-control" id="nis" name="nis">
      @error('nis')
      <div class="text-danger fw-semibold">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label class="form-check-label mb-2" for="exampleRadios1">
        Gender
      </label>
      <div class="d-flex gap-3">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="l" value="L">
          <label class="form-check-label" for="l">
            Laki - Laki
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="p" value="P">
          <label class="form-check-label" for="p">
            Perempuan
          </label>
        </div>
      </div>
      @error('gender')
      <div class="text-danger fw-semibold">
        {{ $message }}
      </div>
      @enderror
    </div>
    <label for="formFile" class="form-label">Class</label>
    <select class="form-select mb-1" aria-label="Default select example" name="class_id">
      <option value="">Select One</option>
      @foreach ($classRooms as $class)
      <option value="{{ $class->id }}">{{ $class->name }}</option>
      @endforeach
    </select>
    @error('class_id')
    <div class="text-danger fw-semibold">
      {{ $message }}
    </div>
    @enderror
    <div class="mt-3">
      <label for="photo" class="form-label">Photo</label>
      <input class="form-control" type="file" id="photo" name="photo">
    </div>
    <button type="submit" class="btn btn-success mt-4">Save</button>
  </form>
</div>
@endsection
