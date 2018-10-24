<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class obrasController extends Controller
{
    public function principal() {
		return view('sistema.obras');
	}
	
	public function nuevaobra() {
		return view('sistema.nueva_obra');
	}
}
