<?php

namespace App\Repositories\Page\AdminPage\Category\Interfaces;

use App\DTO\DTOcreateCategory;
use App\DTO\DTOupdateCategory;
use App\Models\Category;
use Illuminate\Support\Collection;

interface CategoryRepositoryInterface
{
    public function category(): Collection;

    public function createCategory(DTOcreateCategory $dto): Category;

    public function editCategory($slug_category): Category;

    public function updateCategory(DTOupdateCategory $dto, $id): Category;

    public function destroy($id): void;
}
