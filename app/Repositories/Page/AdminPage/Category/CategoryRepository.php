<?php
namespace App\Repositories\Page\AdminPage\Category;

use App\DTO\DTOcreateCategory;
use App\Models\Category;
use App\Repositories\Page\AdminPage\Category\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use Transliterate;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function category()
    {
        $categories = Category::all();

        return $categories;
    }

    public function createCategory(DTOcreateCategory $data): Category
    {
        $category = New Category();
        $category->category = $data->category;
        $category->slug_category = $data->slug_category;
        $category->save();

        return $category;
    }

    public function editCategory($slug_category)
    {
        $category = Category::where('slug_category', $slug_category)->first();

        if(empty($category) OR $category === null){
            return abort(404);
        } else {
        $id = $category->id;
        $name = $category->category;
        $slug_category = $category->slug_category;

        $image = $category->CategoryImage()->first();
        $image = $image->link;

        $category = collect(['id'=>$id, 'name'=>$name, 'slug_category'=>$slug_category, 'image'=>$image ]);

            return $category;
        }
    }

    public function updateCategory($data, $id)
    {
        $category = Category::find($id);

        if($data->category !== 'null'){
            $category->category = $data->category;
            $category->slug_category = Transliterate::slugify($data->category);
            $category->save();
        }

        if($data->image !== 'null'){
            $image = $category->CategoryImage()->first();
            Storage::delete( $image->path);
            $path = Storage::putFile('public/catalog', $data->image);
            $url = Storage::url($path);
            $image->path = $path;
            $image->link = $url;
            $category->CategoryImage()->save($image);
        }

        return $category;
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        $products = $category->Product;
        foreach ($products as $product) {
            $images = $product->image;

            if(isset($images) && $images !== 'null') {
                foreach ($images as $image){
                    Storage::delete($image->path);
                    $image->delete();
                }
                $product->delete();
            }
        }

        $sub_categories = $category->SubCategory;
        foreach ($sub_categories as $sub_category) {
            Storage::delete($sub_category->path);
            $sub_category->delete();
        }

        $image = $category->CategoryImage()->first();
        Storage::delete($image->path);
        $image->delete();
        $category->delete();
    }

}
