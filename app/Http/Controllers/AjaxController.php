<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class AjaxController extends Controller
{

    public function ajax() {
        return view('ajax-view');
    }

    public function ajaxView() {
        $students = Student::all();
        return response()->json([
            'students'=>$students,
        ]);
    }

   
}
