<?php

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $fillable = ['produto_id', 'quantidade', 'data', 'fornecedor_id'];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}