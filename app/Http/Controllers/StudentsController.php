<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function count_index(){
        $data = Students::get();
        return view('admin/dashboard',compact('data'));
    }
    public function index(){
        $data = Students::get();
        return view('admin/students',compact('data'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'group'=>'required',
            'phone'=>'required',
        ]);
        $name = $request->name;
        $group = $request->group;
        $phone = $request->phone;

        $student = new Students();
        $student->name = $name;
        $student->group = $group;
        $student->phone = $phone;
        $student->save();
        return redirect()->back()->with('message','Student Add Successfuly');
    }
    public function edit($id){
        $data = Students::where('id', '=', $id)->first();
        return view('admin/editStudents', compact('data'));
    }
    public function update(Request $request){
        $request->validate([
            'name'=>'required',
            'group'=>'required',
            'phone'=>'required',
        ]);
        $id = $request->id;
        $name = $request->name;
        $group = $request->group;
        $phone = $request->phone;
        //status
        Students::where('id', '=', $id)->update([
            'name'=>$name,
            'group'=>$group,
            'phone'=>$phone,
        ]);
        return redirect('admin/students')->with('message','Student Edit Success');
    }
    public function destroy(Students $student)
    {
        $student->delete();

        return redirect()->back()->with('success', 'Student Data deleted successfully');
    }
}
