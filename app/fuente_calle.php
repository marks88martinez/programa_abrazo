<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fuente_calle extends Model
{
    protected $table = 'fuente_calle';
    protected $primaryKey = 'id_fuente_calle';
    protected $fillable = ['id_fuente_calle','ideducador','centro','foco','procedencia','iddato_nino','idhoras_diarias_trabajada','observacion'];


    public $timestamps = true;


    public function educador(){
        return $this->belongsTo('App\educador','ideducador', 'id_datos_persona');
    }

    public function dato_nino(){
        return $this->belongsTo('App\dato_nino','iddato_nino', 'id_datos_persona');
    }


//    public function scopeActiva($q){
//        return $q->whereHas('datos_persona',function ($w){
//            $w->activa();
//        });
//    }




}
