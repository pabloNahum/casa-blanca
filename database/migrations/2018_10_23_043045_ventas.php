<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ventas extends Migration
{
    
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('idv');
			$table->float('c_unit');
			$table->date('fecha_vta');
			$table->integer('cant_bol');
			$table->float('importe');
			$table->String('descuento');
			$table->integer('id_cte');
			$table->foreign('id_cte')->references('idc')->on('clientes');
			$table->integer('id_obra');
			$table->foreign('id_obra')->references('ido')->on('obras');
			$table->rememberToken();
            $table->timestamps();
		});
    }

    
    public function down()
    {
        Schema::drop('ventas');
    }
}
