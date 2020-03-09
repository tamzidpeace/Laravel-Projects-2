<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    //

    public function download()
    {
        $data = "arafat";
        
        $pdf = PDF::loadView('test', compact('data'));
        return $pdf->download('invoice.pdf');
    }

    public function index() {


        return view('index');
    }
}
