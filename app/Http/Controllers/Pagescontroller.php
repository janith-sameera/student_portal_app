<?php

namespace App\Http\Controllers;

use App\login;
use App\student;
use App\teacher;
use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    public function save_student(Request $request){
        $student=new student();

        $this->validate($request,[
            'First_Name'=>'required',
            'Last_Name'=>'required',
            'School_Name'=>'required',
            'Grade'=>'required',
            'Email'=>'required',
        ]);

        $student->f_name=$request->First_Name;
        $student->l_name=$request->Last_Name;
        $student->school_name=$request->School_Name;
        $student->grade=$request->Grade;
        $student->email=$request->Email;
        $student->save();
        $request->session()->flash('alert-success', 'User was successful Saved!');
        return redirect()->back() ->with('alert', 'Updated!');
    }

    public function save_teacher(Request $request){
        $teacher=new teacher();

        $this->validate($request,[
            'First_Name'=>'required',
            'Last_Name'=>'required',
            'contact_no'=>'required|max:10',
            'Email'=>'required',
        ]);

        $teacher->f_name=$request->First_Name;
        $teacher->l_name=$request->Last_Name;
        $teacher->contact_no=$request->contact_no;
        $teacher->email=$request->Email;
        $teacher->save();
        return redirect()->back() ->with('alert', 'Updated!');
    }

    public function delete_student($id){
        $student=student::find($id);
        $student->delete();
        return redirect()->back();
    }

    public function delete_teacher($id){
        $teacher=teacher::find($id);
        $teacher->delete();
        return redirect()->back();
    }


    public function update_student($id){
        $student=student::find($id);
        return view('/update_student')->with('student',$student);
    }

    public function update_teacher($id){
        $teacher=teacher::find($id);
        return view('/update_teacher')->with('teacher',$teacher);
    }

    public function NewUpdateStudent(Request $request){

        $this->validate($request,[
            'First_Name'=>'required',
            'Last_Name'=>'required',
            'School_Name'=>'required',
            'Grade'=>'required',
            'Email'=>'required',
        ]);

        $id=$request->id;
        $f_name=$request->First_Name;
        $l_name=$request->Last_Name;
        $school_name=$request->School_Name;
        $grade=$request->Grade;
        $email=$request->Email;
        $data=student::find($id);
        $data->f_name=$f_name;
        $data->l_name=$l_name;
        $data->school_name=$school_name;
        $data->email=$email;

        $data->grade=$grade;
        $data->save();
//        $student=student::all();
//        return view('/ViewAllStudent')->with('student',$student);
//        $request->session()->flash('alert-success', 'User was successful Updated!');
        return redirect()->back()->with('alert', 'Updated!');
    }

    public function NewUpdateTeacher(Request $request){
        $this->validate($request,[
            'First_Name'=>'required',
            'Last_Name'=>'required',
            'contact_no'=>'required|max:10',
            'Email'=>'required',
        ]);

        $id=$request->id;
        $f_name=$request->First_Name;
        $l_name=$request->Last_Name;
        $contact_no=$request->contact_no;
        $email=$request->Email;
        $data=teacher::find($id);
        $data->f_name=$f_name;
        $data->l_name=$l_name;
        $data->contact_no=$contact_no;
        $data->email=$email;
        $data->save();
        return redirect()->back()->with('alert', 'Updated!');
    }

    public function passwordStudent(Request $request){
        $login=new login();


    }


}
