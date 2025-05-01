<?php

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'foto', 'codigo', 'quantidade'];
}