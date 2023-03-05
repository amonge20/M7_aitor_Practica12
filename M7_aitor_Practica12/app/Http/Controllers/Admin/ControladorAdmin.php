<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{
    public function inici(){
        return view('Admin.inici') -> with(['text' => 'Benvinguts al inici']);
    }

    public function clientes(){
        return view('Admin.clientes') -> with(['text' => 'Benvinguts a la pagina clients']);
    }

    public function facturacion(){
        return view('Admin.facturacion') -> with(['text' => 'Benvinguts a la pagina factuaracio']);
    }

    public function contabilidad(){
        return view('Admin.contabilidad') -> with(['text' => 'Benvinguts a la pagina comptabilitat']);
    }
}
