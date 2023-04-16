<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard(){
        return view('student.pages.dashboard');
    }

    public function enroll(){
        return view('student.pages.enroll');
    }

    public function enrollment(Request $req){

    }


}
