<?php

namespace TiendaEnLinea;

use Illuminate\Database\Eloquent\Model;

class informe extends Model
{
    protected $table = "informes";

    protected $fillable = ['id', 'fecha_inicio', 'fecha_finalizacion', 'user_id'];
}
