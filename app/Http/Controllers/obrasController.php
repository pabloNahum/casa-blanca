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
	
	public function guardaobra(Request $save) {
		$ido = Request->ido;
		$nombre = Request->nombre;
		$duracion = Request->duracion;
		$cupo = Request->cupo;
		$clasificacion = Request->clasificacion;
		$fecha = Request->fecha;
		$act = Request->act;
		$hr = Request->hr;
		
		$this->validate ($save, [
		'ido'=>'required|numeric',
		'nombre'=>'required|alpha',
		'duracion'=>'required|alpha',
		'cupo'=>'required|numeric',
		'clasificacion'=>'required|alpha',
		'fecha'=>'required|date',
		]);

		$obra = new obras;
		$obra->ido = Request->ido;
		$obra->nombre = Request->nombre;
		$obra->duracion = Request->duracion;
		$obra->cupo = Request->cupo;
		$obra->clasificacion = Request->clasificacion;
		$obra->fecha = Request->fecha;
		$obra->act = Request->id_act;
		$obra->hr = Request->id_hor;
		$obra->save();
		
		return view('sistema.guarda_obra');
	}
	
	public function consultaobra() {
		$obra=obras::orderBy('nombre', 'des')->get();
		return view('sistema.consulta_obra')
		->with('obras', $obras);
	}
}
