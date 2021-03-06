<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    
    public function up()
    {
        Schema::create('usuarios', function(Blueprint $table) {
			$table->increments('idu');
			$table->String('nombre');
			$table->String('ap');
			$table->String('am');
			$table->String('correo');
			$table->String('usuario');
			$table->String('pass');
			$table->String('pass2');
			$table->rememberToken();
			$table->timestamps();
		});
    }

    
    public function down()
    {
        Schema::drop('usuarios');
    }
}
