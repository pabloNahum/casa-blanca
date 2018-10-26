<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\obras;
use App\horarios;

class horariosController extends Controller
{
    public function nuevohorario(){
		$clavequesigue = horarios::orderBY('idh','desc')->take(1)->get();
		$idms = $clavequesigue[0]->idh+1;
		$obras = obras::orderBy('nombre','asc')->get();	
		return view('sistema.nuevo_horario')->with('idms',$idms)->with('obras',$obras);
	}
	
	 public function guardahorario(Request $request){
		$idh = $request -> idh;
		$horario = $request -> horario;
		$id_obra = $request -> id_obra;        

			$this -> validate($request,[
				'idh' => 'required|numeric',
				'horario' => 'required',
			]);
			
			$hrs = new horarios;
			$hrs -> idh = $request->idh;
			$hrs -> horario = $request->horario;
			$hrs -> id_obra = $request->ido;
			$hrs -> save();
			
		$subida = "Alta horarios";
		$mensaje = "horario registrado exitosamente.";
		return view("sistema.mensaje")
            ->with('subida',$subida)
            ->with('mensaje',$mensaje);
	}
	
	 public function consultahorario(){
		$horario = horarios::orderBy('horario', 'asc')->get();
		return view('sistema.consulta_horario')
		->with('horario', $horario);
	}
}
