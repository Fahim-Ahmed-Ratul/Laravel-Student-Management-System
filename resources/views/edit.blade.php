@extends('master')

@section('content')
  <h2>Edit Student</h2>

  <form action="{{ route('update',$student->id) }}" method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name"  value="{{ $student->name }}">
  </div>
  <div class="form-group">
    <label for="registration">Registration</label>
    <input type="text" class="form-control" name="registration" id="registration"  value="{{ $student->registration_id }}">
  </div>
  <div class="form-group">
    <label for="department">Department</label>
    <input type="text" class="form-control" name="department" id="department"  value="{{ $student->department_name }}">
  </div>
  <div class="form-group">
    <label for="info">Info</label>
    <textarea class="form-control" name="info" id="info"  rows="10">{!! $student->info !!}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Register Student</button>
</form>

@endsection
