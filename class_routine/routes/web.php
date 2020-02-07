<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function(){

  //Department
  Route::get('departments', 'DepartmentController@index');
  Route::get('department/create', 'DepartmentController@create');
  Route::post('department/save', 'DepartmentController@save');
  Route::get('department/edit/{id}', 'DepartmentController@edit');
  Route::post('department/update/{id}', 'DepartmentController@update');
  Route::delete('department/delete/{id}', 'DepartmentController@delete');

  //Semesters
  Route::get('semesters', 'SemesterController@index');
  Route::get('semester/create', 'SemesterController@create');
  Route::post('semester/save', 'SemesterController@save');
  Route::get('semester/edit/{id}', 'SemesterController@edit');
  Route::post('semester/update/{id}', 'SemesterController@update');
  Route::delete('semester/delete/{id}', 'SemesterController@delete');


  //Students
  Route::get('students', 'StudentController@index');
  Route::get('student/create', 'StudentController@create');
  Route::post('student/save', 'StudentController@save');
  Route::get('student/edit/{id}', 'StudentController@edit');
  Route::post('student/update/{id}', 'StudentController@update');
  Route::delete('student/delete/{id}', 'StudentController@delete');


  //Subjects
  Route::get('subjects', 'SubjectController@index');
  Route::get('subject/create', 'SubjectController@create');
  Route::post('subject/save', 'SubjectController@save');
  Route::get('subject/edit/{id}', 'SubjectController@edit');
  Route::post('subject/update/{id}', 'SubjectController@update');
  Route::delete('subject/delete/{id}', 'SubjectController@delete');


  //ClassTimes
  Route::get('classtimes', 'ClasstimeController@index');
  Route::get('classtime/create', 'ClasstimeController@create');
  Route::post('classtime/save', 'ClasstimeController@save');
  Route::get('classtime/edit/{id}', 'ClasstimeController@edit');
  Route::post('classtime/update/{id}', 'ClasstimeController@update');
  Route::delete('classtime/delete/{id}', 'ClasstimeController@delete');

  //Day
  Route::get('days', 'DayController@index');
  Route::get('day/create', 'DayController@create');
  Route::post('day/save', 'DayController@save');
  Route::get('day/edit/{id}', 'DayController@edit');
  Route::post('day/update/{id}', 'DayController@update');
  Route::delete('day/delete/{id}', 'DayController@delete');


  //Routine
  Route::get('routines', 'RoutineController@index');
  Route::get('routine/create', 'RoutineController@create');
  Route::post('routine/save', 'RoutineController@save');
  Route::get('routine/edit/{id}', 'RoutineController@edit');
  Route::post('routine/update/{id}', 'RoutineController@update');
  Route::delete('routine/delete/{id}', 'RoutineController@delete');

});
