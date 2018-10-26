<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\obras;
use App\foros;
use App\clasificaciones;

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
		$foros = foros::orderBy('foro','asc')->get();
		$clasificaciones = clasificaciones::orderBy('clasificacion','asc')->get();
		
		return view('sistema.nueva_obra')
					->with('foros',$foros)
					->with('clasificaciones',$clasificaciones)
					->with('idof', $idof);
	}
	
	public function guardaobra(Request $request) {
		$ido = $request->ido;
		$nombre = $request->nombre;
		$duracion = $request->duracion;
		$fecha = $request->fecha;
		$descripcion = $request->descripcion;
		$id_foro= $request->id_foro;        
		$id_clas= $request->id_clas;
		
		$this->validate ($request, [
		'ido'=>'required|numeric',
		'nombre'=>'required|string|max:60',
		'descripcion'=>'required|string|max:60',
		'duracion'=>'required|alpha',
		'fecha'=>'required|date',
		'cartel'=>'image|mimes:jpg,jpeg,png'
		]);
		$file = $request ->file('archivo');
		if($file!="") {
			$ldate= date('Ymd_His_d');
			$img = $file->getClientOriginalName();
			$img2 = $ldate.$img;
			\Storage::disk('obras')->put($img2, \File::get($file));
		}
		else{
			$img2='default.png';
		}
		
		$obra = new obras;
		$obra->ido = $request->ido;
		$obra->cartel = $img2;
		$obra->nombre = $request->nombre;
		$obra->duracion = $request->duracion;
		$obra->descripcion = $request->descripcion;
		$obra->fecha = $request->fecha;
		$obra->id_foro = $request->idf;
		$obra->id_clas = $request->id_clas;
		$obra->save();
		
		$subida = "Alta  Obra";
		$mensaje = "Obra registrada exitosamente.";
		return view("sistema.mensaje")
            ->with('proceso',$subida)
            ->with('mensaje',$mensaje);
	}
	
	public function consultaobra() {
		$obra=obras::orderBy('nombre', 'des')->get();
		return view('sistema.consulta_obra')
		->with('obra', $obra);
	}
}
