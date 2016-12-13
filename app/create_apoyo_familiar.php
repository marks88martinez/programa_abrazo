<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class create_apoyo_familiar extends Model
{
    protected $table = 'create_apoyo_familiars';
    protected $primaryKey = 'id_apoyo_familiars';
    protected $fillable = ['id_educador','centro','nombre_titular','domicilio',
        'visita_numero','etapa_seguimiento','dimensiones_t','Descripción','resultados',
        'acuerdos','proxima_visita'];


    public $timestamps = true;

    public function educadores(){
        return $this->belongsTo('App\educador','id_educador', 'id_datos_persona');
    }



}
