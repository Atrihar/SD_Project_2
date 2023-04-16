<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Group;
use App\Models\Assignment;
use App\Models\Student;
use App\Models\Enrolled;
use App\Models\Question;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function dashboard()
    {
        return view('teacher.pages.dashboard');
    }

    public function course()
    {
        $courses = Course::all();
        return view('teacher.pages.course', compact('courses'));
    }

    public function create_course()
    {
        return view('teacher.pages.create_course');
    }

    public function save_course(Request $req)
    {
        $obj = new Course();
        $obj->title = $req->title;
        $obj->code = $req->code;
        $obj->session = $req->session;
        if($obj->save()){
            echo 'Successfully Inserted';
            return redirect('teacher/course');
        }
        else {
            echo 'Some error occured';
        }
    }

    public function create_group()
    {
        return view('teacher.pages.create_group');
    }

    public function group()
    {
        $group = Group::all();
        return view('teacher.pages.group', compact('group'));
    }

    public function save_group(Request $req)
    {
        $obj = new Group();
        $obj->name = $req->name;
        $obj->course_id = $req->course_id;
        if($obj->save()){
            echo 'Successfully Inserted';
            return redirect('teacher/group');
        }
        else {
            echo 'Some error occured';
        }
    }



    public function question()
    {
        $question = Question::all();
        return view('teacher.pages.question', compact('question'));
    }

    public function create_question()
    {
        return view('teacher.pages.create_question');
    }

    public function save_question(Request $req)
    {
        $obj = new Question();
        $obj->name = $req->name;
        $obj->group_id = $req->group_id;
        $obj->ques = $req->ques;
        $obj->attachment = $req->attachment;
        if($obj->save()){
            echo 'Successfully Inserted';
            return redirect('teacher/question');
        }
        else {
            echo 'Some error occured';
        }
    }


    public function assignment()
    {
        $assignment = Assignment::all();
        return view('teacher.pages.assignment', compact('assignment'));
    }

    public function create_assignment()
    {
        return view('teacher.pages.create_assignment');
    }

    public function save_assignment(Request $req)
    {
        $obj = new Question();
        $obj->ans = $req->ans;
        $obj->attachment = $req->attachment;
        $obj->q_id = $req->q_id;
        $obj->student_id = $req->student_id;
        if($obj->save()){
            echo 'Successfully Inserted';
            return redirect('teacher/assignment');
        }
        else {
            echo 'Some error occured';
        }
    }
}
