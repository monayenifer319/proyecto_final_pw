<?php

namespace TiendaEnLinea;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $table = "facturas";

    protected $fillable = ['id', 'fecha_factura', 'valor_total', 'producto_id',
         'user_id'];
}
