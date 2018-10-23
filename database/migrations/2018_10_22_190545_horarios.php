<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Horarios extends Migration
{
    
    public function up()
    {
        Schema::create('horarios', function(Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('idh');
			$table->time('hora');
			$table->rememberToken();
            $table->timestamps();
		});
    }

    
    public function down()
    {
         Schema::drop('horarios');
    }
}
