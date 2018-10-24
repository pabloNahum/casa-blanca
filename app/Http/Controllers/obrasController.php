<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\obras;
use App\horarios;
use App\actores;

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
		$actores = actores::orderBy('nom_act','asc')->get();
		$horarios = horarios::orderBy('hora','asc')->get();
		
		return view('sistema.nueva_obra')
					->with('actores',$actores)
					->with('horarios',$horarios)
					->with('idof', $idof);
	}
	
	public function guardaobra() {
		return view('sistema.guarda_obra');
	}
}
