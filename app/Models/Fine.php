<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo_multa',
        'n_boleta',
        'vehiculo',
        'chapa_vehiculo',
        'lugar',
        'descripcion',
        'fecha_infraccion',
        'descripcion',
        'conductor',
        'conductor_ci',
        'conductor_municipio',
        'propietario',
        'propietario_ci',
        'user_id',
        'cargado_el',
        'cargado_por',
        'generate_by',
        'state'
    ];

    public function citizen() {
        return $this->belongsTo(Citizen::class);
    }

    // Relación con el usuario al que está asignada la multa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con el usuario que cargó la multa
    public function cargado_por()
    {
        return $this->belongsTo(User::class, 'cargado_por');
    }

    // Relación con el usuario que generó la multa
    public function generate_by()
    {
        return $this->belongsTo(User::class, 'generate_by');
    }

    // Relación con el usuario que anuló la multa
    public function anulado_por()
    {
        return $this->belongsTo(User::class, 'anulado_por');
    }

}
