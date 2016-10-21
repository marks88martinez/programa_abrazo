<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dato_nino extends Model
{
    protected $table = 'dato_nino';
    protected $primaryKey = 'id_datos_persona';
    protected $fillable = ['actividad'];
    public $timestamps = true;

    public function datos_persona(){
        return $this->belongsTo('app/datos_persona', 'id_datos_persona','id_datos_persona');
    }
}
