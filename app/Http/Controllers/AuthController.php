<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Group;
use App\Models\Assignment;
use App\Models\Student;
use App\Models\Enrolled;
use App\Models\Question;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function teacher_register()
    {
        return view('teacher.pages.registration');
    }
    public function teacherRegister(Request $req)
    {
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;
        $confirm = $req->cnf_password;
        $role = $req->role;
        if ($password == $confirm) {
            $user_exists = User::where('email', '=', $email)->first();
            if ($user_exists) {
                return redirect()->back()->with('info', 'User Already Exists');
            } else {
                $user = new User();
                $user->name = $name;
                $user->email = $email;
                $user->password = md5($password); // 123456
                $user->role = $role;
                if ($user->save()) {
                    return redirect()->back()->with('info', 'User registered. Waiting for approval');
                }
            }
        } else {
            return redirect()->back()->with('info', 'Password Mismatch');
        }
    }

    public function login()
    {
        return view('teacher.pages.login');
    }
    public function userLogin(Request $req)
    {
        $email = $req->email;
        $password = $req->password;
        $user = User::where('email', '=', $email)
            ->where('password', '=', md5($password))
            ->first();
        if ($user->role == 'admin') {

            if ($user) {
                if ($user->is_approved == 1) {
                    Session::put('username', $user->name);
                    Session::put('userrole', $user->role);
                    return redirect('admin/dashboard');
                } else {
                    return redirect()->back()->with('info', 'User not approved yet.');
                }
            } else {
                return redirect()->back()->with('info', 'Invalid email or password');
            }
        }
    }
    public function signout(Request $request)
    {
        $request->session()->forget(['username', 'userrole']);
        return redirect('teacher/login');
    }



    public function student_register()
    {
        return view('student.pages.registration');
    }
    public function studentRegister(Request $req)
    {
        $name = $req->name;
        $std_id = $req->std_id;
        $email = $req->email;
        $contact_no = $req->contact_no;
        $batch = $req->batch;
        $user_exists = Student::where('std_id', '=', $std_id)->first();
        if ($user_exists) {
            return redirect()->back()->with('info', 'Student Already Exists');
        } else {
            $user = new Student();
            $user->name = $name;
            $user->email = $email;
            $user->std_id = $std_id;
            $user->contact_no = $contact_no;
            $user->batch = $batch;
            if ($user->save()) {
                return redirect('student/login')->with('info', 'Student registered.');
            }
        }
    }

    public function student_login()
    {
        return view('student.pages.login');
    }
    public function studentLogin(Request $req)
    {
        $std_id = $req->std_id;
        $email = $req->email;


        $user = Student::where('email', '=', $email)
            ->where('std_id', '=', $std_id)
            ->first();
        if ($user) {
            if ($user->status == 'running') {
                Session::put('username', $user->name);
                Session::put('userid', $user->std_id);
                return redirect('student/dashboard');
            } else {
                return redirect()->back()->with('info', 'Waiting for approval.');
            }
        } else {
            return redirect()->back()->with('info', 'Invalid email or studetn Id');
        }
    }
}
