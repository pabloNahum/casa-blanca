<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    protected $primaryKey='idv';
    protected $filable=['idv','c_unit','fecha_vta','cant_bol','importe','descuento','id_cte','id_obra'];
}
