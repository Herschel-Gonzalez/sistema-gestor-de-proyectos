<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Actividad extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

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


     public function registerMediaConversions(Media $media = null): void
     {
         $this->addMediaConversion('thumb')
               ->width(150)
               ->height(150)
               ->sharpen(10);
     }


}
