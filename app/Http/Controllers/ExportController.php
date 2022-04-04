<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ExportController extends Controller
{
    public function export()
    {
        $user_data = session()->get('user_data');
        $pdf = PDF::loadView('resume',compact('user_data'));
        return $pdf->download('resume.pdf');
    }

    public function user_data(Request $request)
    {
        $user_data = $request->all();
        if(isset($user_data)){
            return redirect()->route('export')->with('user_data',$user_data);
        }
    }
}
