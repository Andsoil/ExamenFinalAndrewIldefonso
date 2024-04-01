<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspecieCuidador extends Model
{
    use HasFactory;
    protected $fillable = [
        'cuidador_id',
        'especie_id'
    ];
    public function especie()
    {
        return $this->belongsTo(Especie::class, 'especie_id');
    }
    public function cuidador()
    {
        return $this->belongsTo(Cuidador::class, 'cuidador_id');
    }
}
