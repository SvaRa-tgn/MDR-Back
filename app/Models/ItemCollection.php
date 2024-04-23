<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItemCollection extends Model
{
    use HasFactory;

    public function itemCollection(): HasMany
    {
        return $this->HasMany(Product::class);
    }
}
