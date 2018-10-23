<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $primaryKey='idc';
	protected $fillable=['idc','nom_cte','ap_cte','am_cte','telefono'];
}
