<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'foto',
        'codigo_identificacao',
        'comissao',
        'area_atuacao',
    ];
}