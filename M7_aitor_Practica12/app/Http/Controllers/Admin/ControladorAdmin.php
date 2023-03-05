<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{
    public function articulos(){
        return view('mensajeAdmin') -> with(['text' => 'Benvinguts a la pagina articles']);
    }

    public function clientes(){
        return view('clientes') -> with(['text' => 'Benvinguts a la pagina clients']);
    }

    public function facturacion(){
        return view('facturacion') -> with(['text' => 'Benvinguts a la pagina factuaracio']);
    }

    public function contabilidad(){
        return view('contabilidad') -> with(['text' => 'Benvinguts a la pagina comptabilitat']);
    }
}
