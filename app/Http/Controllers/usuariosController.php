<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;

class usuariosController extends Controller
{
     public function principal() {
		return view('sistema.usuarios');
	}
	
	public function nuevousuario()
    {
        $clavequesigue = usuarios::orderBy('idu','desc')
        ->take(1)
        ->get();
        $idms = $clavequesigue[0]->idu+1;

return view ('sistema.nuevo_usuario')
->with('idms',$idms);
    }

    public function guardausuario(Request $request)
    {
        $nombre= $request->nombre;
        $ap= $request->ap;
        $am= $request->am;
        $correo= $request->correo;
        $usuario= $request->usuario;
        $pass= $request->pass;
        $pass2= $request->pass2;
        $idu= $request->idu;

        $this->validate ($request,[
            'idu'=>'required|numeric',
            'nombre'=>'required|alpha',
            'correo'=>'required|email',
            'ap'=>'required|string',
            'am'=>'required|string',
            'usuario'=>'required|alpha',
            'pass'=>'required|alpha',
            'pass2'=>'required|alpha'
            ]);

            $user =new usuarios;
            $user->idu = $request->idu;
            $user->nombre = $request->nombre;
            $user->ap = $request->ap;
            $user->am = $request->am;
            $user->correo = $request->correo;
            $user->usuario = $request->usuario;
            $user->pass = $request->pass;
            $user->pass2 = $request->pass2;
            $user->save(); 

        
            $subida = "Alta Usuarios";
		$mensaje = "Usuario registrado exitosamente.";
		return view("sistema.mensaje")
            ->with('proceso',$subida)
            ->with('mensaje',$mensaje);
        
}

public function consultausuario()
    {
        $usuario=usuarios::orderBy('nombre','asc')->get();
        return view ('sistema.consulta_usuario')
        ->with('usuarios',$usuario);
    }

    
    



}
