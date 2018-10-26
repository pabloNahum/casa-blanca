<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clasificaciones extends Model
{
     protected $primaryKey='id_class';
	protected $fillable=['id_class','clasificacion'];	
}
