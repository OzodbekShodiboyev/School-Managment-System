<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $data = Subject::get();
        return view('/admin/subjects',compact('data'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        $name = $request->name;

        $subject = new Subject();
        $subject->name = $name;
        $subject->save();
        return redirect()->back()->with('message', 'Teacher added');
    }
    public function edit($id)
    {
        $data = Subject::where('id', '=', $id)->first();
        return view('admin/editSubjects', compact('data'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $id = $request->id;
        $name = $request->name;
        //status
        Subject::where('id', '=', $id)->update([
            'name'=>$name,
        ]);
        return redirect('admin/subjects')->with('message','Teacher Edit Success');
    }
    public function destroy(Subject $subject){
        $subject->delete();
        return redirect()->back()->with('cuccess', 'Teacher delete successfully');
    }

}