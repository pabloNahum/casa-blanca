<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Horarios extends Migration
{
    public function up()
    {
        Schema::create('horarios', function(Blueprint $table) {
			$table->increments('idh');
			$table->time('horario');
			$table->integer('id_obra')->unsigned();
			$table->foreign('id_obra')->references('ido')->on('obras');
			$table->rememberToken();
			$table->timestamps();
		});
    }

    public function down()
    {
        Schema::drop('horarios');
    }
}
