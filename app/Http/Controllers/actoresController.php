<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class actoresController extends Controller
{
     public function principal() {
		return view('sistema.actores');
	}
}
