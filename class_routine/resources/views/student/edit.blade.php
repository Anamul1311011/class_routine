@extends('layouts.app')
@section('title','Update Students')

@section('content')
  <div class="container">
              <div class="card">
                  <div class="card-header">Update Student #{{ $data->id }}</div>
                  @if (session('status'))
                    <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                    </div>

                  @endif
                  <div class="card-body">
                      <form method="POST" action="{{ url('student/update', $data->id) }}" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data->name }}" required autocomplete="name" autofocus>

                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="roll" class="col-md-4 col-form-label text-md-right">Roll</label>

                              <div class="col-md-6">
                                  <input id="roll" type="text" class="form-control @error('roll') is-invalid @enderror" name="roll" value="{{ $data->roll }}" required autocomplete="roll" autofocus>

                                  @error('roll')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="reg_id" class="col-md-4 col-form-label text-md-right">Reg_id</label>

                              <div class="col-md-6">
                                  <input id="reg_id" type="text" class="form-control @error('reg_id') is-invalid @enderror" name="reg_id" value="{{ $data->reg_id }}" required autocomplete="reg_id" autofocus readonly required>

                                  @error('reg_id')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="department_id" class="col-md-4 col-form-label text-md-right">Department_id</label>

                              <div class="col-md-6">

                                <select class="form-control @error('department_id') is-invalid @enderror" name="department_id" required>
                                  <option value="">-Select One-</option>
                                  @foreach($departments as $department)

                                  <option value="{{ $department->id }}" {{ $data->department_id == $department->id ? 'selected' : '' }}>{{ $department->title }}</option>
                                @endforeach
                                </select>

                                  @error('department_id')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="semester_id" class="col-md-4 col-form-label text-md-right">Semester_id</label>

                              <div class="col-md-6">
                                <select class="form-control @error('semester_id') is-invalid @enderror" name="semester_id" required>
                                  <option value="">-Select One-</option>
                                  @foreach($semesters as $semester)

                                  <option value="{{ $semester->id }}" {{ $data->semester_id == $semester->id ? 'selected' : '' }}>{{ $semester->title }}</option>
                                @endforeach
                                </select>

                                  @error('semester_id')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="phone_no" class="col-md-4 col-form-label text-md-right">Phone_no</label>

                              <div class="col-md-6">
                                  <input id="phone_no" type="text" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ $data->phone_no }}" autocomplete="phone_no" autofocus required>

                                  @error('phone_no')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                              <div class="col-md-6">
                                  <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}" required autocomplete="email" autofocus required>

                                  @error('title')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                              <div class="col-md-6">
                                  <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $data->password }}" required autocomplete="password" autofocus required>

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>



                          <div class="form-group row">
                              <label for="image" class="col-md-4 col-form-label text-md-right">image</label>

                              <div class="col-md-6">
                                  <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ $data->image }}" autocomplete="image" autofocus required>

                                  @error('image')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('image') }}</strong>
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
