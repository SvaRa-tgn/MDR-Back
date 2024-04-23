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

    public function createCategory(DTOcreateCategory $dto): Category
    {
        $category = New Category();
        $category->category = $dto->category;
        $category->slug_category = $dto->slug_category;
        $storage = 'public/catalog';
        $image = UpdateStroageService::updateImage($storage, $dto->image);
        $category->link = $image['url'];
        $category->path = $image['path'];
        $category->save();

        return $category;
    }

    public function getCategory(string $slugCategory): Category
    {
        return Category::where('slug_category', $slugCategory)->firstOrFail();
    }

    public function updateCategory(DTOupdateCategory $dto, int $id): Category
    {
        $category = Category::find($id);

        if($dto->category !== 'null'){
            $category->category = $dto->category;
            $category->slug_category = $dto->slug_category;
        }

        if($dto->image !== 'null'){
            UpdateStroageService::deleteImage($category->path);
            $storage = 'public/catalog';
            $image = UpdateStroageService::updateImage($storage, $dto->image);
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
