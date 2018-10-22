<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitioController extends Controller
{
    //------ Vistas ------ \\
    
    public function home() {
        return view('sitio.index');
    }

    public function blog() {
        return view('sitio.blog');
    }

    public function boletos() {
        return view('sitio.boletos');
    }

    public function cartelera() {
        return view('sitio.cartelera');
    }

    public function contacto() {
        return view('sitio.contacto');
    }

    public function cuenta() {
        return view('sitio.cuenta');
    }
}
