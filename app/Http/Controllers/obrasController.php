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
	
	public function guardaobra(Request $request) {
		$ido = $request->ido;
		$nombre = $request->nombre;
		$duracion = $request->duracion;
		$cupo = $request->cupo;
		$clasificacion = $request->clasificacion;
		$fecha = $request->fecha;
		$act = $request->act;
		$hr = $request->hr;
		
		$this->validate ($request, [
		'ido'=>'required|numeric',
		'nombre'=>'required|alpha',
		'duracion'=>'required|alpha',
		'cupo'=>'required|numeric',
		'clasificacion'=>'required|alpha',
		'fecha'=>'required|date',
		]);

		$obra = new obras;
		$obra->ido = $request->ido;
		$obra->nombre = $request->nombre;
		$obra->duracion = $request->duracion;
		$obra->cupo = $request->cupo;
		$obra->clasificacion = $request->clasificacion;
		$obra->fecha = $request->fecha;
		$obra->act = $request->id_act;
		$obra->hr = $request->id_hor;
		$obra->save();
		
		return view('sistema.guarda_obra');
	}
	
	public function consultaobra() {
		$obra=obras::orderBy('nombre', 'des')->get();
		return view('sistema.consulta_obra')
		->with('obras', $obras);
	}
}
