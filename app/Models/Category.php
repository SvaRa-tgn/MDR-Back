<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    public function CategoryImage(): HasOne
    {
        return $this->HasOne(CategoryImage::class);
    }

    public function SubCategory(): HasOne
    {
        return $this->HasOne(SubCategory::class);
    }

    public function Product(): HasOne
    {
        return $this->HasOne(Product::class);
    }
}


