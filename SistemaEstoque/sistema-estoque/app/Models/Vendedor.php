<?php

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $fillable = ['nome', 'foto', 'codigo', 'comissao', 'area_atuacao'];
}
