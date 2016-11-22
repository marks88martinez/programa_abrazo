<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class datos_persona extends Authenticatable
{
    protected $table = 'datos_persona';
    protected $primaryKey = 'id_datos_persona';
    protected $fillable=['nombre','apellido','ci','tipo_cargo','fechanacimiento','telefono','tipo_cargo','email','password','direccion','sexo'];
    public $timestamps = false;

    public function educador(){
        return $this->hasOne('App\educador','id_datos_persona', 'id_datos_persona');
    }
    public function responsable(){
        return $this->hasOne('App\responsable','id_datos_persona', 'id_datos_persona');
    }

    public function dato_nino(){
        return $this->hasOne('App\datos_nino','id_datos_persona', 'id_datos_persona');
    }

    public function scopeActiva($q){
        return $q->where('estado','=',1);
    }
    public function setPasswordAttribute($val){
        if (!empty($val)){
            $this->attributes['password']=Hash::make($val);
        }
    }

}
