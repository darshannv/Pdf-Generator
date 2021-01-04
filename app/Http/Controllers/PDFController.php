<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to OrangeGrids',
            'date' => date('d/m/Y')
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
       return $pdf->stream();
    
      //return $pdf->download('orangeGrids.pdf');
    }
}
