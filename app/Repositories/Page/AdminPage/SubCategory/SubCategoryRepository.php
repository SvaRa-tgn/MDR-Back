<?php


namespace App\Repositories\Page\AdminPage\SubCategory;

use App\Models\Category;
use App\Models\SubCategory;
use App\Repositories\Page\AdminPage\SubCategory\Interfaces\SubcategoryRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use Transliterate;

class SubCategoryRepository implements SubcategoryRepositoryInterface
{
    public function createSubCategory($data)
    {
        $category = Category::where('category', $data->category)->first();

        $subCategory = New SubCategory();
        $subCategory->sub_category = $data->sub_category;
        $subCategory->slug_sub_category = Transliterate::slugify($data->sub_category);

        $path = Storage::putFile('public/catalog', $data->image);
        $url = Storage::url($path);
        $subCategory->path = $path;
        $subCategory->link = $url;

        $category->SubCategory()->save($subCategory);
    }

    public function subCategory()
    {
        $subCategories = SubCategory::all();

        return $subCategories;
    }

    public function editSubCategory($slug_sub_category)
    {
        $subCategory = SubCategory::where('slug_sub_category', $slug_sub_category)->first();

        if(empty($subCategory) OR $subCategory === null){
            return abort(404);
        } else {
            $id = $subCategory->id;
            $sub_category = $subCategory->sub_category;
            $image = $subCategory->link;
            $category = $subCategory->Category()->first();
            $category = $category->category;

            $subCategory = collect(['id' => $id, 'sub_category' => $sub_category, 'image' => $image, 'category' => $category]);

            return $subCategory;
        }
    }

    public function updateSubCategory($data, $id)
    {
        $category = Category::where('category', $data->category)->first();
        $subCategory = SubCategory::find($id);

        if($subCategory->category_id !== $category->id){
            $category->SubCategory()->save($subCategory);
        }

        if($data->sub_category !== 'null'){
            $subCategory->sub_category = $data->sub_category;
            $subCategory->slug_sub_category = Transliterate::slugify($data->sub_category);
        }

        if($data->image !== 'null'){
            Storage::delete( $subCategory->path);
            $path = Storage::putFile('public/catalog', $data->image);
            $url = Storage::url($path);
            $subCategory->path = $path;
            $subCategory->link = $url;
        }

        $subCategory->save();

        return $subCategory;
    }

    public function destroy($id)
    {
        $subCategory = SubCategory::find($id);

        $products = $subCategory->products;
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

        Storage::delete($subCategory->path);
        $subCategory->delete();
    }

}
