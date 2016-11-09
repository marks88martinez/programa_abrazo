<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class educador extends Model
{
    protected  $table = 'educador';
    protected $primaryKey = 'id_datos_persona';
    protected $fillable = ['id_datos_persona','id_responsable'];
    public $timestamps = true;

    public function educador(){
        return $this->hasOne('App\fuente_calle','id_datos_persona','ideducador');
    }

    public function educadores(){
        return $this->hasOne('App\create_apoyo_familia','id_educador','id_datos_persona');
    }

    public function datos_persona(){
        return $this->belongsTo('App\datos_persona', 'id_datos_persona','id_datos_persona');
    }
    public function scopeActiva($q){
        return $q->whereHas('datos_persona',function ($w){
           $w->activa();
        });
    }
}
