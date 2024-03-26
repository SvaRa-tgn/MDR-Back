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

    public function editCategory($slug_category): Category| null
    {
        return Category::where('slug_category', $slug_category)->first();
    }

    public function updateCategory(DTOupdateCategory $dto, $id): Category
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

    public function destroy($id): void
    {
        $category = Category::find($id);

        $products = $category->Product;
        foreach ($products as $product) {
            $images = $product->image;

            if(isset($images) && $images !== 'null') {
                foreach ($images as $image){
                    UpdateStroageService::deleteImage($image->path);
                    $image->delete();
                }
                $product->delete();
            }
        }

        $sub_categories = $category->SubCategory;
        foreach ($sub_categories as $sub_category) {
            UpdateStroageService::deleteImage($sub_category->path);
            $sub_category->delete();
        }

        UpdateStroageService::deleteImage($category->path);
        $category->delete();
    }

}
