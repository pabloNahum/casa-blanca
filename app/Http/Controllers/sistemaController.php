<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sistemaController extends Controller
{
    public function principal() {
        return view('sistema.sistema');
    }
}
