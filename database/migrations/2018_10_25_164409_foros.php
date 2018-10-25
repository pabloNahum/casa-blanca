<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foros extends Migration
{

    public function up()
    {
        Schema::create('foros', function(Blueprint $table) {
			$table->increments('idf');
			$table->String('foro');
			$table->rememberToken();
			$table->timestamps();
		});
    }

    public function down()
    {
        Schema::drop('foros');
    }
}
