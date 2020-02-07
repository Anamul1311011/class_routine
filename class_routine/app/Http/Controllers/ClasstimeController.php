<?php

namespace App\Http\Controllers;
use App\Classtime;
use Illuminate\Http\Request;

class ClasstimeController extends Controller
{
    public function index()
    {
      $datas = Classtime::all();
      return view('classtime.index', compact('datas'));
    }
    public function create()
    {
      return view('classtime.create');
    }
    public function save(Request $request)
    {
      $this->validate($request,[
        'time_duration' => 'required',
      ]);
      Classtime::create([
        'time_duration' => $request->time_duration,
      ]);
      return redirect()->back()->with('status', 'Time Save Successfully');
    }
    public function edit($id)
    {
        $data = Classtime::find($id);
        return view('classtime.edit', compact('data'));
    }
    public function update(Request $request,$id)
    {
      $this->validate($request,[
        'time_duration' => 'required',
      ]);
      $data = Classtime::find($id);
      $data->time_duration = $request->time_duration;
      $data->save();
      return redirect()->back()->with('status', 'Time Updated Successfully');
    }
    public function delete($id)
    {
      $data = Classtime::find($id);
      $data->delete();
      return redirect()->back()->with('status', 'Time Deleted Successfully');
    }

}
