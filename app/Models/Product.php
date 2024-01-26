<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'sub_category_id',
        'type',
        'type_modul',
        'item_modul',
        'item_ready',
        'full_name',
        'slug_full_name',
        'small_name',
        'slug_small_name',
        'article',
        'height',
        'width',
        'deep',
        'status',
        'price',
        'korpus',
        'fasad',
        'color_korpus_id',
        'color_fasad_id',
    ];

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
