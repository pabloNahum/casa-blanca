<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Actores extends Migration
{
   
    public function up()
    {
        Schema::create('actores', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('ida');
			$table->String('nom_act');
			$table->String('ap_act');
			$table->String('am_act');
			$table->integer('telefono');
			$table->String('calle');
			$table->integer('numero');
			$table->String('colonia');
			$table->String('municipio');
			$table->rememberToken();
            $table->timestamps();
		});
    }

    
    public function down()
    {
        Schema::drop('actores');
    }
}
