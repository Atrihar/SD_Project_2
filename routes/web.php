<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('teacher/dashboard', [TeacherController::class, 'dashboard']);
Route::get('teacher/register',[AuthController::class, 'teacher_register']);
Route::post('teacher/registration',[AuthController::class, 'teacherRegister']);
Route::get('teacher/login',[AuthController::class, 'login']);
Route::post('teacher/user-login',[AuthController::class, 'userLogin']);

Route::get('teacher/course', [TeacherController::class, 'course']);
Route::get('teacher/create_course', [TeacherController::class, 'create_course']);
Route::post('teacher/save_course', [TeacherController::class, 'save_course']);

Route::get('teacher/group', [TeacherController::class, 'group']);
Route::get('teacher/create_group', [TeacherController::class, 'create_group']);
Route::post('teacher/save_group', [TeacherController::class, 'save_group']);


Route::get('student/register',[AuthController::class, 'student_register']);
Route::post('student/registration',[AuthController::class, 'studentRegister']);
Route::get('student/login',[AuthController::class, 'student_login']);
Route::post('student/user-login',[AuthController::class, 'studentLogin']);

Route::get('student/dashboard',[StudentController::class, 'dashboard']);
Route::get('student/enroll',[StudentController::class, 'enroll']);
Route::post('student/enrollment',[StudentController::class, 'enrollment']);

Route::get('teacher/question', [TeacherController::class, 'question']);
Route::get('teacher/create_question', [TeacherController::class, 'create_question']);
Route::post('teacher/save_question', [TeacherController::class, 'save_question']);
