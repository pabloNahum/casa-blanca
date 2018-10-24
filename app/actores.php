<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actores extends Model
{
    protected $primaryKey='ida';
	protected $fillable=['ida','nom_act','ap_act','am_act','telefono','calle','numero','colonia','municipio'];	
}
