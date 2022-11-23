<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'cliente',
        'fecha_inicio',
        'fecha_fin',
    ];

    protected $table = "proyectos";
    protected $primaryKey = "id";
    


    public function actividades(){
        return $this->hasMany(Actividad::class);
    }


}
