<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'photo',
        'code',
        'access_count',
        'stock',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'access_count' => 'integer',
        'stock' => 'integer',
    ];

    /**
     * Get the stock entries for the product.
     */
    public function stockEntries(): HasMany
    {
        return $this->hasMany(StockEntry::class);
    }

    /**
     * Get the stock exits for the product.
     */
    public function stockExits(): HasMany
    {
        return $this->hasMany(StockExit::class);
    }
}
