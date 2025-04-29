<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaidaEstoque extends Model
{
    use HasFactory;

    protected $table = 'saidas_estoque';
    protected $fillable = [
        'produto_id',
        'quantidade',
        'data',
        'destino',
        'vendedor_id',
    ];

    /**
     * Get the produto that owns the SaidaEstoque
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class, 'produto_id');
    }

    /**
     * Get the vendedor that owns the SaidaEstoque
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendedor(): BelongsTo
    {
        return $this->belongsTo(Vendedor::class, 'vendedor_id');
    }

    
}
