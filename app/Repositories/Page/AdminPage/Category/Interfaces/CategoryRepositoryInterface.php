<?php

namespace App\Repositories\Page\AdminPage\Category\Interfaces;

use App\DTO\DTOcreateCategory;
use App\DTO\DTOupdateCategory;
use App\Models\Category;
use Illuminate\Support\Collection;

interface CategoryRepositoryInterface
{
    public function category(): Collection;

    public static function categoryFind(int $id): Category;

    public function createCategory(DTOcreateCategory $dto): Category;

    public function getCategory(string $slugCategory): Category;

    public function updateCategory(DTOupdateCategory $dto, int $id): Category;

    public function destroy(Category $category): void;
}
