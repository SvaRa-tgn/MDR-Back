<?php

namespace App\Repositories\Page\AdminPage\SubCategory\Interfaces;

use App\DTO\DTOcreateSubCategory;
use App\DTO\DTOupdateSubCategory;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Collection;

interface SubcategoryRepositoryInterface
{
    public function subCategory(): Collection;

    public function createSubCategory(DTOcreateSubCategory $dto): SubCategory;

    public function editSubCategory($slug_sub_category): SubCategory| null;

    public function updateSubCategory(DTOupdateSubCategory $dto, $id): SubCategory;

    public function destroy($id): void;

    public function catalogSubcategories($article): Collection;

    public function sampleSubCategories($id): Collection;

    public function sampleSubCategoriesCreate($id, $type_item): Collection;
}
