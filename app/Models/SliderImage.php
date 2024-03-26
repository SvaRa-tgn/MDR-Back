<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SliderImage extends Model
{
    use HasFactory;

    public function imageSlider(): BelongsTo
    {
        return $this->BelongsTo(Slider::class);
    }
}
