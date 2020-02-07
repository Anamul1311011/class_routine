<?php

namespace App\Http\Controllers;
use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
      $datas = Subject::all();
      return view('subject.index', compact('datas'));
    }
    public function create()
    {
      return view('subject.create');
    }
    public function save(Request $request)
    {
      $this->validate($request,[
        'title' => 'required',
        'code' => 'required',
      ]);
      Subject::create([
        'title' => $request->title,
        'code' => $request->code,
      ]);
      return redirect()->back()->with('status', 'Subject Save Successfully');
    }
    public function edit($id)
    {
        $data = Subject::find($id);
        return view('subject.edit', compact('data'));
    }
    public function update(Request $request,$id)
    {
      $this->validate($request,[
        'title' => 'required',
        'code' => 'required',
      ]);
      $data = Subject::find($id);
      $data->title = $request->title;
      $data->code = $request->code;
      $data->save();
      return redirect()->back()->with('status', 'Subject Updated Successfully');
    }
    public function delete($id)
    {
      $data = Subject::find($id);
      $data->delete();
      return redirect()->back()->with('status', 'Subject Deleted Successfully');
    }

}
