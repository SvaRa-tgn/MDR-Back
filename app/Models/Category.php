<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    public function SubCategory(): HasMany
    {
        return $this->HasMany(SubCategory::class);
    }

    public function Product(): HasMany
    {
        return $this->HasMany(Product::class);
    }
}


