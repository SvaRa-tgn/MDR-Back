<?php

namespace App\Repositories\Page\AdminPage\SubCategory;

use App\DTO\DTOcreateSubCategory;
use App\DTO\DTOupdateSubCategory;
use App\Models\Category;
use App\Models\SubCategory;
use App\Repositories\Page\AdminPage\SubCategory\Interfaces\SubcategoryRepositoryInterface;
use App\Services\Admin\UpdateStroageService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;
use Transliterate;

class SubCategoryRepository implements SubcategoryRepositoryInterface
{
    public function subCategory(): Collection
    {
        return SubCategory::all();
    }

    public function createSubCategory(DTOcreateSubCategory $dto): SubCategory
    {
        $category = Category::where('category', $dto->category)->first();

        $subCategory = new SubCategory();
        $subCategory->sub_category = $dto->sub_category;
        $subCategory->slug_sub_category = $dto->slug_sub_category;;
        $storage = 'public/catalog';
        $image = UpdateStroageService::updateImage($storage, $dto->image);
        $subCategory->link = $image['url'];
        $subCategory->path = $image['path'];

        $category->SubCategory()->save($subCategory);

        return $subCategory;
    }

    public function editSubCategory($slug_sub_category): SubCategory
    {
        $subCategory = SubCategory::join('categories', 'sub_categories.category_id', '=', 'categories.id')
            ->select('sub_categories.*', 'categories.category')
            ->where('slug_sub_category', $slug_sub_category)->first();

        return $subCategory;
    }

    public function updateSubCategory(DTOupdateSubCategory $dto, $id): SubCategory
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

    public function destroy($id): void
    {
        $subCategory = SubCategory::find($id);

        $products = $subCategory->products;
        foreach ($products as $product) {
            $images = $product->image;

            if (isset($images) && $images !== 'null') {
                foreach ($images as $image) {
                    UpdateStroageService::deleteImage($image->path);
                    $image->delete();
                }
                $product->delete();
            }
        }

        UpdateStroageService::deleteImage($subCategory->path);
        $subCategory->delete();
    }

}
