@extends('layouts.app')
@section('title','Update Time Info')

@section('content')
  <div class="container">
              <div class="card">
                  <div class="card-header">Update Time #{{ $data->id }}</div>
                  @if (session('status'))
                    <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                    </div>

                  @endif
                  <div class="card-body">
                      <form method="POST" action="{{ url('classtime/update', $data->id) }}">
                          @csrf

                          <div class="form-group row">
                              <label for="time_duration" class="col-md-4 col-form-label text-md-right">Time Duration</label>

                              <div class="col-md-6">
                                  <input id="time_duration" type="text" class="form-control @error('time_duration') is-invalid @enderror" name="time_duration" value="{{ $data->time_duration }}" required autocomplete="time_duration" autofocus>

                                  @error('time_duration')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>




                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      Update
                                  </button>


                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
