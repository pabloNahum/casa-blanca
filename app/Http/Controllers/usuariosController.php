<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
     public function principal() {
		return view('sistema.usuarios');
	}
}
