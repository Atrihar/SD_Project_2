<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AuthController;
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
