<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diasdasemana extends Model
{
    use HasFactory;

    protected $table = 'dias_da_semana';
    protected $primaryKey = 'id';
    protected $fillable = [
        'dias_da_semana',
        'status_id'
    ];
}
