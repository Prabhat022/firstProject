<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use PDF;

class PDFController extends Controller
{
    public function pdfView() {
        // return 'hhiiiii';die;
        $students = Student::all();
        return view('pdf.pdf_view', compact('students'));
    }

    public function pdfGeneration() {
        $students = Student::all();
        $pdf_view = PDF::loadView('pdf.pdf_convert', compact('students'));
        return $pdf_view->download('myPDF.pdf');
    }
}
