<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ExportController extends Controller
{
    public function export()
    {
        $pdf = PDF::loadView('resume');
    
        return $pdf->download('resume.pdf');
    }
}
