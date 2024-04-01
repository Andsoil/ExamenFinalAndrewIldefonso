<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'
    ];
    public function animal()
    {
        return $this->hasMany(Animal::class, 'recinto_id');
    }
    public function especie()
    {
        return $this->belongsTo(Especie::class, 'especie_id');
    }
}
