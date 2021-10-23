<?php

namespace App\Http\Controllers;

use App\Models\MultipleRowInsert;
use Illuminate\Http\Request;

class MainController extends Controller
{

public function toastr()
{
      return view('toastr'); 

    //return redirect('/toastr')->with(['msg'=>'success','msgType'=>'success']);
}

public function test()
{
        return redirect('/toastr')->with(['msg'=>'how are you tody?','msgType'=>'success']);
}

public function multipleRowInsert()
{
        return view('multipleRowInsert');
}
public function multipleRowInfoSubmit(Request $request)
{
        MultipleRowInsert::multipleRowInfoSubmit($request);
         return 'success';
}




}//controller
