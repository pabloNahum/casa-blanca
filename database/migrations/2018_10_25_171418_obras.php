<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Obras extends Migration
{
    public function up()
    {
        Schema::create('obras', function(Blueprint $table) {
			$table->increments('ido');
			$table->String('nombre');
			$table->String('duracion');
			$table->date('fecha');
			$table->String('descripcion');
			$table->String('cartel');
			$table->integer('id_foro')->unsigned();
			$table->foreign('id_foro')->references('idf')->on('foros');
			$table->integer('id_clas')->unsigned();
			$table->foreign('id_clas')->references('id_clas')->on('clasificaciones');
			$table->rememberToken();
			$table->timestamps();
		});
    }

    public function down()
    {
        Schema::drop('obras');
    }
}
