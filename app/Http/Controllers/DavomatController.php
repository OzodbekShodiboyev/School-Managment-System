<?php

namespace App\Http\Controllers;

use App\Models\Davomat;
use Illuminate\Http\Request;

class DavomatController extends Controller
{
    public function index(){
        $dat = Davomat::get();
        return view('/teachers/davomat',compact('dat'));
    }
    
    public function delete($id)
    {
        $dat = Davomat::find($id);
        $dat->delete();
        return response()->json(['success' => 'success']);
    }
}
