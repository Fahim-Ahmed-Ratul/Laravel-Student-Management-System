@extends('master')

@section('content')
  <h2>Create New Student</h2>

  <form action="{{ route('store') }}" method="post" data-parsley-validate>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ csrf_field() }}

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name"  maxlength="10" placeholder="Enter Name" required>
  </div>
  <div class="form-group">
    <label for="registration">Registration</label>
    <input type="text" class="form-control" name="registration" id="registration"  placeholder="Enter Registration Id" required>
  </div>
  <div class="form-group">
    <label for="department">Department</label>
    <input type="text" class="form-control" name="department" id="department"  placeholder="Enter Department Name" required>
  </div>
  <div class="form-group">
    <label for="info">Info</label>
    <textarea class="form-control" name="info" id="info"  placeholder="Enter Info" rows="10"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Register Student</button>
</form>

@endsection
