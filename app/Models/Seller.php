<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [
        'nome',
        'foto',
        'codigo_identificacao',
        'comissao',
        'area_atuacao',
    ];
} 