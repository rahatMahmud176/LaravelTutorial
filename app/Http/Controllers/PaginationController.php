<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
  

    public function index( )
    {
        return view('ajax-pagination.pagination-parent',[
            'students' => Student::paginate(3)
        ]);
    }

    
    public function fetch(Request $request)
    {
         if ($request->ajax()) {
            //  $students = Student::paginate(3);
            //  return view('ajax-pagination.pagination-child', compact('students'))->render();
             return view('ajax-pagination.pagination-parent',[
            'students' => Student::paginate(3)
        ]);
         }
    }





}
