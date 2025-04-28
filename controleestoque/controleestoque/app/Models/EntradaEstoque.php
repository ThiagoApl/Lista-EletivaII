<?php

// Laravel - app/Models/EntradaEstoque.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EntradaEstoque extends Model
{
    use HasFactory;

    protected $table = 'entradas_estoque'; // Specify the table name
    protected $fillable = ['produto_id', 'quantidade', 'data', 'fornecedor'];  // Allow mass assignment

    // Define the relationship with the Produto model
    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }
}
