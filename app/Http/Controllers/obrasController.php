<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class obrasController extends Controller
{
    public function principal() {
		return view('sistema.obras');
	}
	
	public function nuevaobra() {
		$incid = obras::orderBy('ido', 'desc')
									->take(1)
									->get();
		$idof = $incid[0]->ido+1;

		return view('sistema.nueva_obra')
					->with('idof', $idof);
	}
	
	public function guardaobra() {
		return view('sistema.guarda_obra');
	}
}
