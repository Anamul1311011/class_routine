@extends('layouts.app')
@section('title','Update Subject Info')

@section('content')
  <div class="container">
              <div class="card">
                  <div class="card-header">Update Subject #{{ $data->id }}</div>
                  @if (session('status'))
                    <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                    </div>

                  @endif
                  <div class="card-body">
                      <form method="POST" action="{{ url('subject/update', $data->id) }}">
                          @csrf

                          <div class="form-group row">
                              <label for="title" class="col-md-4 col-form-label text-md-right">Subject Title</label>

                              <div class="col-md-6">
                                  <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $data->title }}" required autocomplete="title" autofocus>

                                  @error('title')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="code" class="col-md-4 col-form-label text-md-right">Subject Code</label>

                              <div class="col-md-6">
                                  <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ $data->code }}" required autocomplete="code" autofocus>

                                  @error('code')
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
