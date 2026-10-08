<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model; //  Importación correcta para MongoDB

class Libro extends Model
{
    // Opcional: define la conexión y/o la colección si difieren de las convenciones
    protected $connection = 'mongodb';
    protected $collection = 'libros';

    // Campos asignables masivamente
    protected $fillable = [
        'titulo',
        'autor',
        'genero',
        'anio_publicacion'
    ];
}