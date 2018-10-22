<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ventasController extends Controller
{
     public function principal() {
		return view('sistema.ventas');
	}
}
