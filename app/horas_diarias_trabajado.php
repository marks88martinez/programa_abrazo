<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horas_diarias_trabajado extends Model
{
    protected $table = 'horas_diarias_trabajado';
    protected $primaryKey = 'id_hora_trabajada';
    protected  $fillable = ['id_fuente_calle', 'horas', 'fecha'];
    public $timestamps = true;
}
