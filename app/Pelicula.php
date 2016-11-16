<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
  protected $table = 'pelicula'; // esta línea es debido a que no seguimos las convenciones de nomenclatura de Laravel en relación al nombre de las tablas

  /* Aca seteo los campos que quiero editar */
  // protected $fillable = ['nombre', 'apellido', 'rating'];

  /* Le especifico que mi tabla no tiene los camops created_at y updated_at que vienen por defecto con laravel */
  public $timestamps = false;
}
