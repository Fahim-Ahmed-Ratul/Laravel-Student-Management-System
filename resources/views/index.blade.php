@extends('master')

@section('content')
<table class="table table-responsice table-hover">
  <tr>
    <th>SL</th>
    <th>Name</th>
    <th>Registraion</th>
    <th>Department Name</th>
    <th>Info</th>
    <th>Action</th>
  </tr>

  @php
    $i=0;
  @endphp
  @foreach($students as $student)
  @php
    $i++;
  @endphp
  <tr>
    <td>{{ $i }}</td>
    <td>{{ $student->name}}</td>
    <td>{{ $student->registration_id}}</td>
    <td>{{ $student->department_name}}</td>
    <td>{{ $student->info}}</td>
    <td>
      <a href="{{ route('edit',$student->id)}}" class="btn btn-success">Edit</a>
      <form class="form-inline" action="{{ route('delete',$student->id) }}" method="post">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
@endsection
