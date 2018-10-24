<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Obras extends Migration
{
    
    public function up()
    {
        Schema::create('obras', function(Blueprint $table){
			$table->increments('ido');
			$table->String('nombre');
			$table->time('duracion');
			$table->String('cupo');
			$table->String('clasificacion');
			$table->date('fecha');
			$table->String('foro');
			$table->integer('ida')->unsigned();
			$table->foreign('ida')->references('ida')->on('actores');
			$table->integer('idh')->unsigned();
			$table->foreign('idh')->references('idh')->on('horarios');
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
     Schema::drop('obras');
    }
}
