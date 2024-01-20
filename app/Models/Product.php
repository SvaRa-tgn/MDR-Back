<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }

    public function subCategory(): BelongsTo
    {
        return $this->BelongsTo(SubCategory::class);
    }

    public function color(): BelongsTo
    {
        return $this->BelongsTo(Color::class);
    }

    public function image(): HasMany
    {
        return $this->HasMany(Image::class);
    }
}
