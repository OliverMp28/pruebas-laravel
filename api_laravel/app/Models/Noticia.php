<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    //
    protected $table = 'noticia';
    protected $fillable = ['titulo', 'autor', 'descripcion'];
    
}
