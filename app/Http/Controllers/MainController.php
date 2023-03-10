<?php

namespace App\Http\Controllers;

use App\Models\MultipleRowInsert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{


public $data = [];






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



public function mailSend( )
{
        $data = [
                'name'  => 'Customer',
                'email' => 'rahatmahmud1165@gmail.com',
        ];
        

        Mail::send('front-end.test-email',$data, function($message) use ($data){
                $message->to($data['email']);
                $message->subject('Test mail');
        });
        return 'success';
}










}//controller
