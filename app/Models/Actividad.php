<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $table = "actividades";

    protected $primaryKey = "id";

    protected $fillable = [
        'idusuario',
        'titulo',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'tiempo_estimado',
        'prioridad',
        'estatus',
        'proyecto_id'
    ];

    function proyecto() {
       return $this->belongsTo(Proyecto::class);
    }

    function user() {
        return $this->belongsTo(User::class);
     }
}
