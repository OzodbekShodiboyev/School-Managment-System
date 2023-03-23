<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function index(){
        $data = Group::get();
        return view('/admin/groups',compact('data'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'teacher'=>'required',
        ]);
        $name = $request->name;
        $teacher = $request->teacher;

        $group = new Group();
        $group->name = $name;
        $group->teacher = $teacher;
        $group->save();
        return redirect()->back()->with('message', 'Group added');
    }
    public function edit($id)
    {
        $data = Group::where('id', '=', $id)->first();
        return view('admin/editGroups', compact('data'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'teacher'=>'required',
        ]);
        $id = $request->id;
        $name = $request->name;
        $teacher = $request->teacher;
        //status
        Group::where('id', '=', $id)->update([
            'name'=>$name,
            'teacher'=>$teacher,
        ]);
        return redirect('admin/groups')->with('message','Group Edit Success');
    }
    public function destroy(Group $group){
        $group->delete();
        return redirect()->back()->with('success', 'Group delete successfully');
    }

}
