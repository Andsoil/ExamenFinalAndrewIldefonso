<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'cuidador',
        'especie_id',
        'recinto_id'
    ];
    public function actividadanimal()
    {
        return $this->hasMany(ActividadAnimal::class, 'animal_id');
    }
    public function recinto()
    {
        return $this->belongsTo(Recinto::class, 'recinto_id');
    }
    public function especie()
    {
        return $this->belongsTo(Especie::class, 'especie_id');
    }
}
