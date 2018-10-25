<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actores extends Model
{
    protected $primaryKey='ida';
	protected $fillable=['ida','nombre','ap','am','foto','id_obra'];	
}
