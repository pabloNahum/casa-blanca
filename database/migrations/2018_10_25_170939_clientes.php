<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{

    public function up()
    {
        Schema::create('clientes', function(Blueprint $table){
			$table->increments('idc');
			$table->String('nom_cte');
			$table->String('ap_cte');
			$table->String('am_cte');
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
