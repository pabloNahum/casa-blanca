<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;
class clientesController extends Controller
{
    public function principal() {
		return view('sistema.clientes');
	}
	
	public function nuevocliente()
	{
		$clavequesigue = clientes::orderBY('idc','desc')->take(1)->get();
		$idms = $clavequesigue[0]->idc+1;
		return view('sistema.nuevo_cliente')->with('idms',$idms);	
	}
	
	public function guardacliente(Request $request)
	{
		//return $request;
		// Extraccion de los datos por metodo post
		$idc = $request -> idc;
		$nom_cte = $request -> nom_cte;
		$ap_cte = $request -> ap_cte;
		$am_cte = $request -> am_cte;
		$telefono = $request -> telefono;
		//no se recibe el archivo
		// Validaciones de los campos
			$this -> validate($request,[
				'idc' => 'required|numeric',
				'nom_cte' => 'required|alpha',
				'ap_cte' => 'required|alpha',
				'am_cte' => 'required|alpha',
				'telefono' => ['regex:/^[0-9]{10}$/'],
			]);
			$cte = new clientes;
			$cte -> idc = $request->idc;
			$cte -> nom_cte = $request->nom_cte;
			$cte -> ap_cte = $request->ap_cte;
			$cte -> am_cte = $request->am_cte;
			$cte -> telefono = $request->telefono;
			$cte -> save();
			
			$subida = "Alta Cliente";
		$mensaje = "Cliente registrado exitosamente.";
		return view("sistema.mensaje")
            ->with('proceso',$subida)
            ->with('mensaje',$mensaje);
			
	}
	
	public function consultacliente()
	{
		$clientes = clientes::orderBy('nom_cte','asc')->get();
		return view('sistema.consulta_cliente')
			   ->with('clientes',$clientes);
	}
}
