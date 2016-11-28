<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class horas_diarias_trabajado extends Model
{
    protected $table = 'horas_diarias_trabajado';
    protected $primaryKey = 'id_hora_trabajada';
    protected  $fillable = ['id_fuente_calle', 'horas', 'fecha'];
    public $timestamps = true;

    public function getFechaFormateadaAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['fecha'])->format('d/m/Y');
    }
}
