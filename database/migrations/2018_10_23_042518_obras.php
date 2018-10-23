<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Obras extends Migration
{
    
    public function up()
    {
        Schema::create('obras', function (Blueprint $table){
			$table->engine = 'InnoDB';
			$table->increments('ido');
			$table->String('nombre');
			$table->time('duracion');
			$table->String('cupo');
			$table->String('clasificacion');
			$table->date('fecha');
			$table->String('foro');
			$table->integer('id_act');
			$table->foreign('id_act')->references('ida')->on('actores');
			$table->integer('id_hor');
			$table->foreign('id_hor')->references('idh')->on('horarios');
			$table->rememberToken();
            $table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
