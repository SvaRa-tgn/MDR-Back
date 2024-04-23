<?php

namespace App\Repositories\Page\Search;

use App\DTO\DTOsearchProduct;
use App\Models\Product;

class ElascticSearchRepository
{
    public function searchElastic(DTOsearchProduct $dto)
    {
        return Product::search()->where('full_name', $dto->search)->get();
    }
}
