<?php
namespace App\Repositories\Page\AdminPage\Category;

use App\DTO\DTOcreateCategory;
use App\DTO\DTOupdateCategory;
use App\Models\Category;
use App\Repositories\Page\AdminPage\Category\Interfaces\CategoryRepositoryInterface;
use App\Services\Admin\UpdateStroageService;
use Illuminate\Support\Collection;
use Transliterate;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function category(): Collection
    {
        return Category::all()->sortBy('category');
    }

    public static function categoryFind(int $id): Category
    {
        return Category::find($id);
    }

    public function createCategory(DTOcreateCategory $dto, array $image): Category
    {
        $category = New Category();
        $category->category = $dto->category;
        $category->slug_category = $dto->slug_category;
        $category->link = $image['url'];
        $category->path = $image['path'];
        $category->save();

        return $category;
    }

    public function getCategory(string $slugCategory): Category
    {
        return Category::where('slug_category', $slugCategory)->firstOrFail();
    }

    public function updateCategory(Category $category, DTOupdateCategory $dto, array $image): Category
    {
        if($dto->category !== 'null'){
            $category->category = $dto->category;
            $category->slug_category = $dto->slug_category;
        }

        if($dto->image !== 'null'){
            $category->link = $image['url'];
            $category->path = $image['path'];
        }

        $category->save();

        return $category;
    }

    public function destroy(Category $category): void
    {
        UpdateStroageService::deleteImage($category->path);
        $category->delete();
    }

}
