<?php

namespace App\Http\Controllers;

use App\Models\odel;
use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $data = Teachers::get();
        return view('admin/teachers',compact('data'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'subject'=>'required',
            'phone'=>'required',
            'email'=>'required',
        ]);
        $name = $request->name;
        $subject = $request->subject;
        $phone = $request->phone;
        $email = $request->email;

        $teacher = new Teachers();
        $teacher->name = $name;
        $teacher->subject = $subject;
        $teacher->phone = $phone;
        $teacher->email = $email;
        $teacher->save();
        return redirect()->back()->with('message', 'Teacher added');
    }
    public function edit($id)
    {
        $data = Teachers::where('id', '=', $id)->first();
        return view('admin/editTeachers', compact('data'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'subject'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ]);
        $id = $request->id;
        $name = $request->name;
        $subject = $request->subject;
        $email = $request->email;
        $phone = $request->phone;
        //status
        Teachers::where('id', '=', $id)->update([
            'name'=>$name,
            'subject'=>$subject,
            'phone'=>$phone,
            'email'=>$email,
        ]);
        return redirect('admin/teachers')->with('message','Teacher Edit Success');
    }
    public function destroy(Teachers $teacher){
        $teacher->delete();
        return redirect()->back()->with('cuccess', 'Teacher delete successfully');
    }

}
