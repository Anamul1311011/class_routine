<?php

namespace App\Http\Controllers;
use App\Routine;
use App\Subject;
use App\Classtime;
use App\Day;
use Illuminate\Http\Request;



class RoutineController extends Controller
{
    public function index()
    {
      $datas = Routine::all();
      return view('routine.index', compact('datas'));
    }
    public function create()
    {
      $subjects = Subject::all();
      $classtimes = Classtime::all();
      $days = Day::all();
      return view('routine.create', compact('subjects', 'classtimes', 'days'));
    }
    public function save(Request $request)
    {

      $this->validate($request,[
        'subject_id' => 'required',
        'classtime_id' => 'required',
        'day_id' => 'required',

      ]);

      Routine::create([

        'subject_id' => $request->subject_id,
        'classtime_id' => $request->classtime_id,
        'day_id' => $request->day_id,

      ]);
      return redirect()->back()->with('status', 'Routine Save Successfully');
    }
    public function edit($id)
    {
        $data = Routine::find($id);
        $subjects = Subject::all();
        $classtimes = Classtime::all();
        $days = Day::all();
        return view('routine.edit', compact('data', 'subjects', 'classtimes', 'days'));
    }
    public function update(Request $request,$id)
    {
      $this->validate($request,[
        'subject_id' => 'required',
        'classtime_id' => 'required',
        'day_id' => 'required',
      ]);
      $data = Routine::find($id);
      $data->update($request->all());
      return redirect()->back()->with('status', 'Routine Updated Successfully');
    }
    public function delete($id)
    {
      $data = Routine::find($id);
      $data->delete();
      return redirect()->back()->with('status', 'Routine Deleted Successfully');
    }

}
