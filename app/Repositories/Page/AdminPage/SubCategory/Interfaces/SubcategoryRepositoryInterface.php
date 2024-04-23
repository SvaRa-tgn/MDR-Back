<?php

namespace App\Repositories\Page\AdminPage\SubCategory\Interfaces;

use App\DTO\DTOcreateSubCategory;
use App\DTO\DTOupdateSubCategory;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Collection;

interface SubcategoryRepositoryInterface
{
    public function subCategory(): Collection;

    public static function subCategoryFind(int $id): SubCategory;

    public function createSubCategory(DTOcreateSubCategory $dto): SubCategory;

    public function getSubCategory(string $slugSubCategory): SubCategory;

    public function updateSubCategory(DTOupdateSubCategory $dto, int $id): SubCategory;

    public function destroy(SubCategory $subCategory): void;

    public function catalogSubcategories(Category $category): Collection;

    public function sampleSubCategories(int $id): Collection;

    public function sampleSubCategoriesCreate(int $id, string $type_item): Collection;
}
