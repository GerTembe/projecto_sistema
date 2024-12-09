<?php

namespace App\Http\Controllers;

use App\Models\Monographs;
use Barryvdh\DomPDF\Facade\Pdf;





class PdfControle extends Controller
{
    public function gerarPdf()
    {
        $users = Monographs::all();
 
       
        $title = 'Gestão de monografia';
        $data = date('m/d/Y');
        $mono1 = $users;
        
        
        $pdf = Pdf::loadView('livewire.monografia.relatorio',compact('title', 'data', 'mono1') );
        
        return $pdf->download('Monografia_Relatorio.pdf');
       
    }
   
}


