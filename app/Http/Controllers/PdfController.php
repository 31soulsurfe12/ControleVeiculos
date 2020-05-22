<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Solicitacao;
use \App\Vehicle;
use \App\Authorizacao;
use PDF;

class PdfController extends Controller
{
    public function gerarPdf(){
      //$authorizacao = Authorizacao::all();
      $solicitacao = Solicitacao::all();

      //$pdf = PDF::loadView('pdf', compact('authorizacao'));
      //return $pdf->setPaper('a4')->stream('Autorização.pdf');

      $pdf = PDF::loadView('pdf', compact('solicitacao'));
      return $pdf->setPaper('a4')->stream('Solicitação.pdf');
    }
}
