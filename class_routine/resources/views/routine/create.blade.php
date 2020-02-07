@extends('layouts.app')
@section('title','Routines')

@section('content')
  <div class="container">
              <div class="card">
                  <div class="card-header">Add Routine</div>
                  @if (session('status'))
                    <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                    </div>

                  @endif
                  <div class="card-body">
                      <form method="POST" action="{{ url('routine/save') }}">
                          @csrf

                          <div class="form-group row">
                              <label for="day_id" class="col-md-4 col-form-label text-md-right">Day</label>

                              <div class="col-md-6">

                                <select class="form-control @error('day_id') is-invalid @enderror" name="day_id" required>
                                  <option value="">-Select One-</option>
                                  @foreach($days as $day)

                                  <option value="{{ $day->id }}">{{ $day->title }}</option>
                                @endforeach
                                </select>

                                  @error('day_id')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="subject_id" class="col-md-4 col-form-label text-md-right">Subject</label>

                              <div class="col-md-6">

                                <select class="form-control @error('subject_id') is-invalid @enderror" name="subject_id" required>
                                  <option value="">-Select One-</option>
                                  @foreach($subjects as $subject)

                                  <option value="{{ $subject->id }}">{{ $subject->title }}</option>
                                @endforeach
                                </select>

                                  @error('subject_id')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="classtime_id" class="col-md-4 col-form-label text-md-right">Time Duration</label>

                              <div class="col-md-6">
                                <select class="form-control @error('classtime_id') is-invalid @enderror" name="classtime_id" required>
                                  <option value="">-Select One-</option>
                                  @foreach($classtimes as $classtime)

                                  <option value="{{ $classtime->id }}">{{ $classtime->time_duration }}</option>
                                @endforeach
                                </select>

                                  @error('classtime_id')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>




                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      Save
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
