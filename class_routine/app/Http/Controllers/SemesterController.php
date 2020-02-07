<?php

namespace App\Http\Controllers;
use App\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function index()
    {
      $datas = Semester::all();
      return view('semester.index', compact('datas'));
    }
    public function create()
    {
      return view('semester.create');
    }
    public function save(Request $request)
    {
      $this->validate($request,[
        'title' => 'required',
      ]);
      Semester::create([
        'title' => $request->title,
      ]);
      return redirect()->back()->with('status', 'Semester Save Successfully');
    }
    public function edit($id)
    {
        $data = Semester::find($id);
        return view('semester.edit', compact('data'));
    }
    public function update(Request $request,$id)
    {
      $this->validate($request,[
        'title' => 'required',
      ]);
      $data = Semester::find($id);
      $data->title = $request->title;
      $data->save();
      return redirect()->back()->with('status', 'Semester Updated Successfully');
    }
    public function delete($id)
    {
      $data = Semester::find($id);
      $data->delete();
      return redirect()->back()->with('status', 'Semester Deleted Successfully');
    }

}
