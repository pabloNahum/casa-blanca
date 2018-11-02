<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\actores;
use App\obras;

class actoresController extends Controller
{
    public function principal() {
		return view('sistema.actores');
	}

	public function nuevoactor() {
		$clavequesigue = actores::orderBy('ida','desc')
        ->take(1)
        ->get();
		$idms = $clavequesigue[0]->ida+1;
		
		$obras = obras::orderBy('nombre', 'asc')
										->get();

		return view('sistema.nuevo_actor')
		->with('obras', $obras)
		->with('idms', $idms);
	}

	public function guardaactor(Request $datos) {
		$nombre = $datos->nombre;
		$ap = $datos->ap;
		$am = $datos->am;
		
		$this->validate($datos,[
			'ida'=>'required|numeric',
			'nombre'=>'required|alpha',
			'ap'=>'required|alpha',
			'am'=>'required|alpha',
			'foto'=>'image|mimes:jpg,jpeg,png'
		]);

		$file = $datos->file('archivo');
		if($file!="") {
			$ldate= date('Ymd_His_');
			$img = $file->getClientOriginalName();
			$img2 = $ldate.$img;
			\Storage::disk('local')->put($img2, \File::get($file));
		}
		else{
			$img2='default.png';
		}

		$actor = new actores;
		$actor->archivo = $img2;
		$actor->ida = $datos->ida;
		$actor->nombre = $datos->nombre;
		$actor->ap = $datos->ap;
		$actor->am = $datos->am;
		$actor->id_obra = $datos->id_obra;
		$actor->save();

		$subida = "Alta de Actor";
		$mensaje = "Actor registrado exitosamente.";
		return view("sistema.mensaje")
            ->with('subida',$subida)
            ->with('mensaje',$mensaje);
	}

	public function consultaactor() {
		$actor = actores::orderBy('ida', 'asc')->get();
		return view("sistema.consulta_actor")
		->with('actores', $actor);
	}

	public function modificaactor($ida) {
		$actor = actores::where('ida', '=', $ida)->get();
		$ido = $actor[0]->ido;
		$obra = obras::where('ido', '=', $ido)->get();
		$otrasobras = obras::where('ido', '!=', $ido)->get();
		return view('sistema.modifica_actor')
					->with('actor', $actor[0])
					->with('ido', $ido)
					->with('obra', $obra[0]->nombre)
					->with('otrasobras', $otrasobras);
	}

	public function guardamodificacion(Request $datos) {
		$nombre = $datos->nombre;
		$ap = $datos->ap;
		$am = $datos->am;
		
		$this->validate($datos,[
			'ida'=>'required|numeric',
			'nombre'=>'required|alpha',
			'ap'=>'required|alpha',
			'am'=>'required|alpha',
			'foto'=>'image|mimes:jpg,jpeg,png'
		]);

		$file = $datos->file('archivo');
		if($file!="") {
			$ldate= date('Ymd_His_');
			$img = $file->getClientOriginalName();
			$img2 = $ldate.$img;
			\Storage::disk('local')->put($img2, \File::get($file));
		}
		else{
			$img2='default.png';
		}

		$actor = new actores;
		$actor->archivo = $img2;
		$actor->ida = $datos->ida;
		$actor->nombre = $datos->nombre;
		$actor->ap = $datos->ap;
		$actor->am = $datos->am;
		$actor->id_obra = $datos->id_obra;
		$actor->save();

		$subida = "Modificación de Actor";
		$mensaje = "Actor modificado exitosamente.";
		return view("sistema.mensaje")
            ->with('proceso',$subida)
            ->with('mensaje',$mensaje);
	}

	public function eliminaactor($ida) {
		actores::find($ida)->delete();
		$eliminaciion = "Eliminar Actor";
		$mensaje = "Actor eliminato exitosamente";
		return view('sistema.mensaje')
            ->with('eliminacion',$eliminaciion)
            ->with('mensaje',$mensaje);
	}
}
