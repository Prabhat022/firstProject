<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class StudentController extends Controller
{
    public function index() {
        $url = url('/student');
        $title = "Ragistration Form";
        $data = compact('url', 'title');
        return view('student')->with($data);
    }

    public function student(Request $request) {
        // echo "<pre>";
        // print_r($request->all());

        // p($request->all());die;

        $student = new Student();
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->password =Hash::make($request['password']);
        $student->country = $request['country'];
        $student->save();

        return redirect('login')->with("success", "Registration successful, Login to access the data.");
    }

    public function login() {   
        return view('login');
    }

    public function loginPost(Request $request) {
        // $students = Student::all();
        $request->validate([
        'email' => 'required',
        'password' => 'required'
        ]);
       $credentials = $request->only('email', 'password');

    //    foreach($students as $row) {
    //     if($request['email'] == $row->email && $request['password'] == $row->password) {
    //         return redirect('/student/view');
    //     }
    //    }

       if(Auth::attempt($credentials)) {
        return redirect()->intended(route('student.view'));
       }

       return redirect(route('login'))->with('error', 'login details are not valid.');
    }

    public function view(Request $request) {
        $search = $request['search'] ?? "";
        if($search != "") {
            $students = Student::where('name', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->get();
        } else {
            $students = Student::simplePaginate(5);
        }
        $data = compact('students','search');
        return view('student-view')->with($data);
    }

    public function trash() {
        $students = Student::onlyTrashed()->get();
        $data = compact('students');
        return view('student-trash')->with($data);
    }

    public function delete($id) {
        $student_a = Student::find($id);
        if(!is_null($student_a)) {
            $student_a->delete();
        }
        return redirect('student/view');
    }

    public function forceDelete($id) {
        $student_a = Student::withTrashed()->find($id);
        if(!is_null($student_a)) {
            $student_a->forceDelete();
        }
        return redirect('student/view');
    }

    public function restore($id) {
        $student_a = Student::withTrashed()->find($id);
        if(!is_null($student_a)) {
            $student_a->restore();
        }
        return redirect('student/view');
    }

    public function edit($id) {
        $student = Student::find($id);
        if(is_Null($student)) {
            return redirect('student/view');
        } else {
            $title = "Updation Form";
            $url = url('/student/update')."/".$id;
            $data = compact('student', 'url', 'title'); 
            return view('student')->with($data);
        }
    }

    public function update($id, Request $request) {
        $student = Student::find($id);
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->password =Hash::make($request['password']);
        $student->country = $request['country'];
        $student->save();
        return redirect('/login')->with("success", "Updated successful, Login to access the data.");
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
