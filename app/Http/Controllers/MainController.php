<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

public function toastr()
{
      return view('toastr'); 

    //return redirect('/toastr')->with(['notification'=>'success','msgType'=>'success']);
}

public function test()
{
        return redirect('/toastr')->with(['notification'=>'how are you tody?','msgType'=>'success']);
}







}//controller
