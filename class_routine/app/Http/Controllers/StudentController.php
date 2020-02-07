<?php

namespace App\Http\Controllers;
use App\Student;
use App\Department;
use App\Semester;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class StudentController extends Controller
{
    public function index()
    {
      $datas = Student::all();

      return view('student.index', compact('datas'));
    }
    public function create()
    {
      $departments = Department::all();
      $semesters = Semester::all();
      return view('student.create', compact('departments', 'semesters'));
    }
    public function save(Request $request)
    {

      $this->validate($request,[
        'name' => 'required',
        'roll' => 'required',
        'reg_id' => 'required',
        'department_id' => 'required',
        'semester_id' => 'required',
        'phone_no' => 'required|regex:/(01)[0-9]{9}/',
        'email' => 'email|required|unique:users,id',
        'password' => 'required',

      ]);
      $stdImage='';
      if ($request->hasFile('image')) {
        $image= $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/uploads/students/' .$filename));
        $stdImage = $filename;
      }

      Student::create([

        'name' => $request->name,
        'roll' => $request->roll,
        'reg_id' => $request->reg_id,
        'department_id' => $request->department_id,
        'semester_id' => $request->semester_id,
        'phone_no' => $request->phone_no,
        'email' => $request->email,
        'password' => $request->password,
        'image' => $stdImage,
      ]);
      return redirect()->back()->with('status', 'Student Save Successfully');
    }
    public function edit($id)
    {
        $data = Student::find($id);
        $departments = Department::all();
        $semesters = Semester::all();
        return view('student.edit', compact('data', 'departments', 'semesters'));
    }
    public function update(Request $request,$id)
    {
      $this->validate($request,[
        'name' => 'required',
      ]);
      $data = Student::find($id);
      $data->update($request->all());
      return redirect()->back()->with('status', 'Student Updated Successfully');
    }
    public function delete($id)
    {
      $data = Student::find($id);
      $data->delete();
      return redirect()->back()->with('status', 'Student Deleted Successfully');
    }

}
