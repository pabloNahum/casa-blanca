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
        $nom_usr= $request->nom_usr;
        $ap_usr= $request->ap_usr;
        $am_usr= $request->am_usr;
        $correo= $request->correo;
        $usuario= $request->usuario;
        $pass= $request->pass;
        $pass2= $request->pass2;
        $idu= $request->idu;

        $this->validate ($request,[
            'idu'=>'required|numeric',
            'nom_usr'=>'required|alpha',
            'correo'=>'required|email',
            'ap_usr'=>'required|string',
            'am_usr'=>'required|string',
            'usuario'=>'required|alpha',
            'pass'=>'required|alpha',
            'pass2'=>'required|alpha'
            ]);

            $user =new usuarios;
            $user->idu = $request->idu;
            $user->nom_usr = $request->nom_usr;
            $user->ap_usr = $request->ap_usr;
            $user->am_usr = $request->am_usr;
            $user->correo = $request->correo;
            $user->usuario = $request->usuario;
            $user->pass = $request->pass;
            $user->pass2 = $request->pass2;
            $user->save(); 

        
            
        
}

public function consultausuario()
    {
        $usuario=usuarios::orderBy('nom_usr','des')->get();
        return view ('sistema.consulta_usuario')
        ->with('usuarios',$usuario);
    }

    
    



}
