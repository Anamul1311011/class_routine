@extends('layouts.app')
@section('title','days')

@section('content')
  <div class="card">
    <div class="card-body">
      Day List || <a href="{{ url('day/create') }}">Add Day</a>
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
      <th scope="col">Day</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datas as $data)
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->title }}</td>
      <td>
            <a href="{{ url('day/edit', $data->id) }}" class="btn btn-primary a-btn-slide-text">
              <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
              <span><strong>Edit</strong></span>
            </a>
            <form id="delete-form-{{ $data->id }}" class="" action="{{ url('day/delete',$data->id) }}" method="post" style="display:none">
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
