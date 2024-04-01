<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    protected $fillable = [
       'nombre',
        'dia',
        'horario',
        'descripcion'
    ];
    public function actividadanimal()
    {
        return $this->hasMany(ActividadAnimal::class, 'actividad_id');
    }
}
