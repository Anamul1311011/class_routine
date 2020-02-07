@extends('layouts.app')
@section('title','students')

@section('content')
  <div class="card">
    <div class="card-body">
      Student List || <a href="{{ url('student/create') }}">Add student</a>
    </div>
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>

    @endif
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sl. No</th>
      <th scope="col">image</th>
      <th scope="col">Name</th>
      <th scope="col">Roll</th>
      <th scope="col">Reg_id</th>
      <th scope="col">Department</th>
      <th scope="col">Semester</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datas as $data)
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td> <img src="{{ url('uploads/students/',$data->image) }}" alt="" style="height:50px; width:50px"> </td>
      <td>{{ $data->name }}</td>
      <td>{{ $data->roll }}</td>
      <td>{{ $data->reg_id }}</td>
      <td>{{ $data->department->title }}</td>
      <td>{{ $data->semester->title }}</td>
      <td>{{ $data->phone_no }}</td>
      <td>{{ $data->email }}</td>
      <td>{{ $data->password }}</td>
      <td>
            <a href="{{ url('student/edit', $data->id) }}" class="btn btn-primary a-btn-slide-text">
              <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
              <span><strong>Edit</strong></span>
            </a>
            <form id="delete-form-{{ $data->id }}" class="" action="{{ url('student/delete',$data->id) }}" method="post" style="display:none">
              @csrf
              {{ method_field('DELETE') }}
            </form>
            <a href="" class="btn btn-primary a-btn-slide-text"onclick="
            if(confirm('Are u really want to delete this?'))
            {
              event.preventDefault();
              document.getElementById('delete-form-{{ $data->id }}').submit();
            }
          else{
            event.preventDefault();
          }
            ">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
              <span><strong>Delete</strong></span>
           </a>
  </td>
    </tr>
  @endforeach
  </tbody>
</table>

  </div>
@endsection
