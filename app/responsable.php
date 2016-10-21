<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class responsable extends Model
{
    protected $table = 'responsable';
    protected $primaryKey = 'id_datos_persona';
    protected $fillable = ['id_datos_persona'];

    public $timestamps = true;

    public function datos_persona(){
        return $this->belongsTo('App\datos_persona', 'id_datos_persona','id_datos_persona');
    }

    public function scopeActiva($q){
        return $q->whereHas('datos_persona',function ($w){
            $w->activa();
        });
    }
}
