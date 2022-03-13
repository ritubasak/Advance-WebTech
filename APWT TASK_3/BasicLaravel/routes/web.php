<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('welcome');
});

//Basic Routes
Route::get('/home', [PagesController::class,'index'])->name('home');
Route::get('/profile', [PagesController::class,'profile'])->name('profile');
Route::get('/product', [PagesController::class,'product'])->name('product');
Route::get('/Ourteams', [PagesController::class,'Ourteams'])->name('Ourteams');
Route::get('/aboutus', [PagesController::class,'aboutus'])->name('aboutus');
Route::get('/contactus', [PagesController::class,'contactus'])->name('contactus');

Route::get('/user/{id}', function($id)
{
    return "<b>The passed id is ".$id."</b>";
});

//Student Routes
Route::get('/studentlist', [StudentController::class, 'studentlist'])->name('studentlist');
// Route::get('/studentedit/{id}/{name}', [StudentController::class,'studentedit'])->name('studentedit');

Route::get('/studentedit/{id}/{name}',[StudentController::class,'studentedit']);
Route::post('/studentedit',[StudentController::class,'studentEditSubmitted'])->name('studentedit');
Route::get('/studentDelete/{id}/{name}',[StudentController::class,'studentDelete']);

Route::get('/studentcreate', [StudentController::class,'studentcreate'])->name('studentcreate');
Route::post('/studentcreate', [StudentController::class,'studentcreateSubmitted'])->name('studentcreate');

Route::get('/teacherCreate', [TeacherController::class,'teacherCreate'])->name('teacherCreate')->middleware('ValidTeacher');;
Route::post('/teacherCreate', [TeacherController::class,'teacherCreateSubmitted'])->name('teacherCreate');
Route::get('/teacherList', [TeacherController::class,'teacherList'])->name('teacherList')->middleware('ValidTeacher');

// Route::get('/teacher/courses/',[TeacherController::class,'teacherCourses'])->name('teacher.courses');
Route::get('/teacher/courses/{id}',[TeacherController::class,'teacherCourses'])->name('teacher.courses');
Route::get('/courses',[CourseController::class,'courseTeacher'])->name('teacher.courses');

//Teacher login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//teacher dash
Route::get('/teacher/dash', [PagesController::class,'teacherDash'])->name('teacherDash')->middleware('ValidTeacher');



// //task2
// Route::get('/login', [StudentController::class,'login'])->name('login');
// Route::post('/login', [StudentController::class,'loginset'])->name('login');

Route::get('/registration', [StudentController::class,'registration'])->name('registration');
Route::post('/registration', [StudentController::class,'checkregistration'])->name('registration');


Route::get('/contact', [StudentController::class,'contact'])->name('contact');
Route::post('/contact', [StudentController::class,'checkcontact'])->name('contact');


Route::get('/lg', function () {
    return view('lg');
 });