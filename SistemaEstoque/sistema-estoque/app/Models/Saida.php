<?php

use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
    protected $fillable = ['produto_id', 'quantidade', 'data', 'destino', 'vendedor_id'];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class);
    }
}
