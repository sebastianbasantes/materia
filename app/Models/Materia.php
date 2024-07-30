<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{

    use HasFactory;
    // Define los atributos que se pueden asignar en masa
    protected $fillable = [
        'nombre',
        'descripcion', // Corregido de 'descripción'
        'creditos', // Corregido de 'créditos'
        'tipo',
        'valor_hora', // Corregido para eliminar el espacio adicional
        'estado',
    ];
    
}
