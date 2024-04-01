<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'
    ];
    public function especiecuidador()
    {
        return $this->hasMany(EspecieCuidador::class, 'cuidador_id');
    }
}
