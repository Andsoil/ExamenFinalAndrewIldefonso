<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadAnimal extends Model
{
    use HasFactory;
    protected $fillable = [
        'actividad_id',
        'animal_id'
    ];
    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'actividad_id');
    }
    public function animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }
}
