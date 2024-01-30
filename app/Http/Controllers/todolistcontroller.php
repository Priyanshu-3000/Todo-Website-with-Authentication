<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\todolist;

class todolistcontroller extends Controller
{
  function index(){
    $list = todolist::all();
    return view('dashboard', compact('list'));
  }
  
  
  
    function save(Request $Req){
    
    $list = new todolist;
    $list -> name = Request('name');
    $list -> description = Request('description');
    $list -> date = Request('date');
    $list -> save();
    return redirect(url('dashboard')); 
}

public function delete($id)
{
    $list = todolist::find($id);  
    $list->delete();
    return redirect(url('dashboard')); 
}

}