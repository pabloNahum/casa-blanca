<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table){
			$table->engine = 'InnoDB';
			$table->increments('idu');
			$table->String('nom_cte');
			$table->String('ap_cte');
			$table->String('user');
			$table->String('pass');
			$table->String('pass2');
			$table->integer('telefono');
			$table->rememberToken();
            $table->timestamps();
		});
    }

    public function down()
    {
        Schema::drop('usuarios');
    }
}
