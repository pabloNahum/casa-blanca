<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clasificaciones extends Migration
{
    public function up()
    {
        Schema::create('clasificaciones', function(Blueprint $table) {
			$table->increments('id_clas');
			$table->String('clasificacion');
			$table->rememberToken();
			$table->timestamps();
		});
    }

    
    public function down()
    {
        Schema::drop('clasificaciones');
    }
}
