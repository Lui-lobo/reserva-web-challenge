<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'reserva',
        'nome_do_cliente',
        'mesa_reservada',
        'horario_reservado',
        'preco_hora',
        'status_id',
    ];
}
