<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'documento',
        'endereco',
        'telefone',
        'email',
        'categoria',
    ];

    /**
     * Get the stock entries for the supplier.
     */
    public function stockEntries(): HasMany
    {
        return $this->hasMany(StockEntry::class);
    }
}
