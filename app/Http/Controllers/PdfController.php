<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    
    public function index()
    {
        //$user = User::latest()->paginate(5);
  
            $pdf = PDF::loadView('pdf');
            return $pdf->download('pdfview.pdf');

           
    

        return view('home');
    }
}