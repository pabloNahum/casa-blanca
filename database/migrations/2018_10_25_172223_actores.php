<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Actores extends Migration
{
    
    public function up()
    {
        Schema::create('actores',function(Blueprint $table) {
			$table->increments('ida');
			$table->String('nombre');
			$table->String('ap');
			$table->String('am');
			$table->String('foto');
			$table->integer('id_obra')->unsigned();
			$table->foreign('id_obra')->references('ido')->on('obras');
			$table->rememberToken();
			$table->timestamps();
		});
    }

    public function down()
    {
        Schema::drop('actores');
    }
}
