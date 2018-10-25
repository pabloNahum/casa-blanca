<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{

    public function up()
    {
        Schema::create('clientes', function(Blueprint $table){
			$table->increments('id_cli');
			$table->String('nombre');
			$table->String('ap');
			$table->String('am');
			$table->String('telefono');
			$table->rememberToken();
			$table->timestamps();
		});
    }

    public function down()
    {
        Schema::drop('clientes');
    }
}
