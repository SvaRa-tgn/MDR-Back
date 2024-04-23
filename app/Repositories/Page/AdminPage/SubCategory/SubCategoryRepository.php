<?php

namespace App\Repositories\Page\AdminPage\SubCategory;

use App\DTO\DTOcreateSubCategory;
use App\DTO\DTOupdateSubCategory;
use App\Models\Category;
use App\Models\SubCategory;
use App\Repositories\Page\AdminPage\SubCategory\Interfaces\SubcategoryRepositoryInterface;
use App\Services\Admin\UpdateStroageService;
use Illuminate\Database\Eloquent\Collection;
use Transliterate;

class SubCategoryRepository implements SubcategoryRepositoryInterface
{
    public function subCategory(): Collection
    {
        return SubCategory::all()->sortBy('sub_category');
    }

    public static function subCategoryFind(int $id): SubCategory
    {
        return SubCategory::find($id);
    }

    public function createSubCategory(DTOcreateSubCategory $dto): SubCategory
    {
        $category = Category::where('category', $dto->category)->first();

        $subCategory = new SubCategory();
        $subCategory->sub_category = $dto->sub_category;
        $subCategory->slug_sub_category = $dto->slug_sub_category;
        $subCategory->type_item = $dto->type_item;
        $storage = 'public/catalog';
        $image = UpdateStroageService::updateImage($storage, $dto->image);
        $subCategory->link = $image['url'];
        $subCategory->path = $image['path'];

        $category->SubCategory()->save($subCategory);

        return $subCategory;
    }

    public function getSubCategory(string $slugSubCategory): SubCategory
    {
        return SubCategory::join('categories', 'sub_categories.category_id', '=', 'categories.id')
            ->select('sub_categories.*', 'categories.category')
            ->where('slug_sub_category', $slugSubCategory)->firstOrFail();
    }

    public function updateSubCategory(DTOupdateSubCategory $dto, int $id): SubCategory
    {
        $category = Category::where('category', $dto->category)->first();
        $subCategory = SubCategory::find($id);

        if ($subCategory->category_id !== $category->id) {
            $category->SubCategory()->save($subCategory);
        }

        if ($dto->sub_category !== 'null') {
            $subCategory->sub_category = $dto->sub_category;
            $subCategory->slug_sub_category = $dto->slug_sub_category;
        }

        if ($subCategory->type_item !== $dto->type_item) {
            $subCategory->type_item = $dto->type_item;
        }

        if ($dto->image !== 'null') {
            UpdateStroageService::deleteImage($subCategory->path);
            $storage = 'public/catalog';
            $image = UpdateStroageService::updateImage($storage, $dto->image);
            $subCategory->link = $image['url'];
            $subCategory->path = $image['path'];
        }

        $subCategory->save();

        return $subCategory;
    }

    public function destroy(SubCategory $subCategory): void
    {
        UpdateStroageService::deleteImage($subCategory->path);
        $subCategory->delete();
    }

    public function catalogSubcategories(Category $category): Collection
    {
        return SubCategory::leftjoin('categories', 'sub_categories.category_id', '=', 'categories.id')
            ->select('sub_categories.*', 'categories.category')
            ->orderBy('sub_category')
            ->where('category_id', $category->id)->get();
    }

    public function sampleSubCategories(int $id): Collection
    {
        return SubCategory::where('category_id', $id)->get();
    }

    public function sampleSubCategoriesCreate(int $id, string $typeItem): Collection
    {
        return SubCategory::where('category_id', $id)->where('type_item', $typeItem)->get();
    }

}
