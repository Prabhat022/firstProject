<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function showHome() {
    //     return view('welcome');
    // }

    // public function showUser() {
    //     return view('user');
    // }

    // public function showPost(string $id) {
    //     return view('post', ['id' => $id]);
    // }

    public function upload(Request $request) {
        // echo "<pre>";
        // print_r($request->all());
        $fileName = time()."-img.".$request->file('file')->getClientOriginalExtension();
        echo $request->file('file')->storeAs('uploads', $fileName);
    }
}
