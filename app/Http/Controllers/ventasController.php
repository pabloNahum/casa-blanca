<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ventas;
use APP\obras:
use App\clientes;

class ventasController extends Controller
{
     public function principal() {
		return view('sistema.ventas');
	}
	
	public function nuevaventa(){
			$clavequesigue = ventas::orderBY('idv','desc')->take(1)->get();
		$idms = $clavequesigue[0]->idv+1;
		$obras = obras::where('activo','si')->orderBy('obra','asc')->get();
		$clientes = clientes::where('activo','si')->orderBy('nom_cte','asc')->get();
		return view('sistema.nueva_venta')->with('carreras',$carreras)->with('carreras',$carreras)->with('idms',$idms);	
	}
	
	public function guardaventa(Request $request){
		$idv = $request -> idv;
		$c_unit = $request -> c_unit;
		$fecha_vnta = $request -> fecha_vnta;
		$cant_bol = $request -> cant_bol;
		$importe = $request -> importe;
		$descuento = $request -> descuento;
		$idc = $request -> ido;
		$ido = $request -> idc;
			$this -> validate($request,[
				'idv' => 'required|numeric',
				'c_unit' => 'required|numeric',
				'fecha_vnta' => 'required',
				'cant_bol' => 'required|numeric',
				'importe' => 'required|numeric',
				'descuento' => 'required|numeric',
				'ido' => 'required|numeric',
				'idc' => 'required|numeric',
			]);
			$vnta = new ventas;
			$vnta -> idv = $request->idv;
			$vnta -> c_unit = $request->c_unit;
			$vnta -> fecha_vnta = $request->fecha_vnta;
			$vnta -> cant_bol = $request->cant_bol;
			$vnta -> importe = $request->importe;
			$vnta -> descuento = $request->descuento;
			$vnta -> ido = $request->ido;
			$vnta -> idc = $request->idc;
			$vnta -> save();			
	}
	
	public function consultaventa(){
		$clientes = ventas::orderBy('fecha_vnta','asc')->get();
		return view('sistema.consulta_ventas')
			   ->with('ventas',$ventas);
	}
}
