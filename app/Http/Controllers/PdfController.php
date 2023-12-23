<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function baixar(){
        

        $pdf = new Dompdf();
        $pdf->loadHtml('pagina que eu quero que seja trasnofrmada em html');
        $pdf->render();
        $pdf->stream();
    }
}
