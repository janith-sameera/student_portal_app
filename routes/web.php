<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/calender', function () {
    return view('calender');
});

Route::get('/add_student', function () {
    return view('add_student');
});

Route::get('/add_teacher', function () {
    return view('add_teacher');
});

Route::get('/ViewAllStudent',function (){
    $data=App\student::all();
    return view('ViewAllStudent')->with('student',$data);
});

Route::get('/ViewAllTeacher',function (){
    $data=App\teacher::all();
    return view('ViewAllTeacher')->with('teacher',$data);
});

Route::post('/save_student','Pagescontroller@save_student');
Route::get('/studentdelete/{id}','Pagescontroller@delete_student');
Route::get('/studentupdate/{id}','Pagescontroller@update_student');
Route::post('/updateStudent','Pagescontroller@NewUpdateStudent');
Route::post('/student_password_update','Pagescontroller@passwordStudent');


Route::post('/save_teacher','Pagescontroller@save_teacher');
Route::get('/teacherdelete/{id}','Pagescontroller@delete_teacher');
Route::get('/teacherupdate/{id}','Pagescontroller@update_teacher');
Route::post('/updateTeacher','Pagescontroller@NewUpdateTeacher');
