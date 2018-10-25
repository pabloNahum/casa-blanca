<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class obras extends Model
{
    protected $primaryKey='ido';
	protected $fillable=['ido','nombre','duracion', 'fecha', 'descripcion', 'cartel', 'id_foro','id_clas'];
}
