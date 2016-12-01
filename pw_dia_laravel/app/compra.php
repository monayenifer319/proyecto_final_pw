<?php

namespace TiendaEnLinea;

use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    protected $table = "compras";

    protected $fillable = ['id', 'fecha_registro', 'valor', 'cantidad',
        'producto_id', 'user_id'];
}
