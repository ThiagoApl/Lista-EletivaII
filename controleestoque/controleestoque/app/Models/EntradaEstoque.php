<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntradaEstoque extends Model
{
    use HasFactory;

    protected $table = 'entrada_estoques'; // Se o nome da tabela for diferente

    protected $fillable = [
        'produto_id',
        'quantidade',
        'data_entrada',
        'fornecedor_id',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'produto_id');
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'fornecedor_id');
    }
}