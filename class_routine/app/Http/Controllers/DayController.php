<?php

namespace App\Http\Controllers;
use App\Day;
use Illuminate\Http\Request;

class DayController extends Controller
{
    public function index()
    {
      $datas = Day::all();
      return view('day.index', compact('datas'));
    }
    public function create()
    {
      return view('day.create');
    }
    public function save(Request $request)
    {
      $this->validate($request,[
        'title' => 'required',
      ]);
      Day::create([
        'title' => $request->title,
      ]);
      return redirect()->back()->with('status', 'Day Save Successfully');
    }
    public function edit($id)
    {
        $data = Day::find($id);
        return view('day.edit', compact('data'));
    }
    public function update(Request $request,$id)
    {
      $this->validate($request,[
        'title' => 'required',
      ]);
      $data = Day::find($id);
      $data->title = $request->title;
      $data->save();
      return redirect()->back()->with('status', 'Day Updated Successfully');
    }
    public function delete($id)
    {
      $data = Day::find($id);
      $data->delete();
      return redirect()->back()->with('status', 'Day Deleted Successfully');
    }

}
