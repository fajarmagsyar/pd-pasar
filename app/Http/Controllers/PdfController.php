<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function seluruhPerPasar()
    {
        
        $pdf = PDF::loadview('pdf-export.test')->setpaper('A4', 'portrait');
        return $pdf->stream('laporan-');
    }
}
