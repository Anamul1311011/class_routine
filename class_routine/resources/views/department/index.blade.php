@extends('layouts.app')
@section('title','departments')

@section('content')
  <div class="card">
    <div class="card-body">
      Department List || <a href="{{ url('department/create') }}">Add Department</a>
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
      <th scope="col">Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($departments as $department)
    <tr>
      <th scope="row">{{ $department->id }}</th>
      <td>{{ $department->title }}</td>
      <td>
            <a href="{{ url('department/edit', $department->id) }}" class="btn btn-primary a-btn-slide-text">
              <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
              <span><strong>Edit</strong></span>
            </a>
            <form id="delete-form-{{ $department->id }}" class="" action="{{ url('department/delete',$department->id) }}" method="post" style="display:none">
              @csrf
              {{ method_field('DELETE') }}
            </form>
            <a href="" class="btn btn-primary a-btn-slide-text"onclick="
            if(confirm('Are u really want to delete this?'))
            {
              event.preventDefault();
              document.getElementById('delete-form-{{ $department->id }}').submit();
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
