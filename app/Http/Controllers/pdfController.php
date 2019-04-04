<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;



class pdfController extends Controller
{
    //

    public function generatePDF(){

        

        $pdf  = PDF::loadView('ticketout');

        return $pdf->download('ticketout.pdf');
    }
}
