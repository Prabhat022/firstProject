<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Student;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AjaxController;



Route::get('/', function() {
    return view('login');
});

Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);

// Route::get('/student', function() {
//     $students = Student::all();
//     echo "<pre>";
//     print_r($students->toArray());
// });

Route::get('/student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');
Route::get('/student/force-delete/{id}', [StudentController::class, 'forceDelete'])->name('student.force-delete');
Route::get('/student/restore/{id}', [StudentController::class, 'restore'])->name('student.restore');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('/student/create', [StudentController::class, 'index'])->name('student.create');
Route::get('/student/view', [StudentController::class, 'view'])->name('student.view');
Route::get('/student/trash', [StudentController::class, 'trash'])->name('student.trash');
Route::post('/student', [StudentController::class, 'student']);




Route::get('/pdf/view', [PDFController::class, 'pdfView'])->name('pdf.view');
Route::get('/pdf/convert', [PDFController::class, 'pdfGeneration'])->name('pdf.convert');

Route::get('/ajax', [AjaxController::class, 'ajax'])->name('ajax');
Route::get('/ajax/view', [AjaxController::class, 'ajaxView'])->name('ajax.view');



Route::get('/login',[StudentController::class, 'login'])->name('login');
Route::post('/login',[StudentController::class, 'loginPost'])->name('login.post');
Route::get('/logout', [StudentController::class, 'logout'])->name('logout');

Route::get('/upload', function() {
    return view('upload');
});

Route::post('/upload', [PageController::class, 'upload']);

Route::get('get-all-session', function() {
    $session = session()->all();
    p($session);
});


Route::get('set-session', function (Request $request) {
    $request->session()->put('user_name', 'Php learning');
    $request->session()->put('user_id', '123');
    $request->session()->flash('status', 'success');
    return redirect('get-all-session');
});

Route::get('destroy-session', function() {
    session()->forget('user_name');
    session()->forget('user_id');
    return redirect('get-all-session');
});


Route::get('/data', [IndexController::class, 'index'])->middleware('guard');
Route::get('/group', [IndexController::class, 'group'])->middleware('guard');

Route::middleware(['guard'])->group(function() {
    Route::get('/data', [IndexController::class, 'index']);
    Route::get('/group', [IndexController::class, 'group']);
});
Route::get('/no-access', function() {
    echo "You are not allowed to access the page";
    die;
});
Route::get('/login-new', function() {
    session()->put('user_id', 1);
    return redirect('/L_in');
});

Route::get('/logout', function() {
    session()->forget('user_id');
    return redirect('/L_out');
});

Route::get('/L_in', function() {
    echo "Login";
});
Route::get('/L_out', function() {
    echo "Logout";
});






Route::get('/{name1?}', function($name1 = null) {
    $demo = "<h2>Laravel testing</h2>";
    $data = compact('name1', 'demo');
    return view('home')->with($data);
});


































// Route::controller(PageController::class)->group(function() {
//     Route::get('/', 'showHome')->name('home');
//     Route::get('/user', 'showUser')->name('user');
//     Route::get('/post/{id}', 'showPost');
// });



// Route::get('/', [PageController::class, 'showHome'])->name('home');
// Route::get('/user', [PageController::class, 'showUser'])->name('user');
// Route::get('/post/{id}', [PageController::class, 'showPost']);






// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/post', function(){
//     return view('post');
// });

// Route::get('/post/{id}', function($id) {
//     return "<h2>Post ID: ".$id."</h2>";
// });






// Route::get('/post', function () {
//     return view('post');
//     // return "<h4>Post page new</h4>";
// });

// Route::view('/post','post');

// Route::get('/hello',function() {
//     return view('post');
// });

// Route::get('/post/firstpost', function() {
//     return view('firstpost');
// });