<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaidaData extends Model
{
    use HasFactory;

        protected $fillable = [
        'transportadora',
        'produto',
        'peso_saida',
        'data_saida',
        'motorista',
        'placa_veiculo',
        'empresa_origem',
        'empresa_destino'
    ];

    protected $table = 'data_carga_saida';
}
