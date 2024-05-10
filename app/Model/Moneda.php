<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    protected $table = "moneda";

    protected $fillable = ['monto', 'moneda_origen', 'moneda_destino', 'tipo_cambio'];

}
