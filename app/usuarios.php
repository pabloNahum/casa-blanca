<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $primaryKey='idu';
    protected $filable=['idu','nom_usr','ap_usr','am_usr','correo','usuario','pass','pass2'];
}
