<?php


namespace App\Repositories\Page\AdminPage\SubCategory;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Storage;
use Transliterate;

class SubCategoryRepository
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

    public function showSubCategory()
    {
        $subCategories = SubCategory::all();

        return $subCategories;
    }

    public function editSubCategory($slug_sub_category)
    {
        $subCategory = SubCategory::where('slug_sub_category', $slug_sub_category)->first();
        $id = $subCategory->id;
        $sub_category = $subCategory->sub_category;
        $image = $subCategory->link;
        $category = $subCategory->Category()->first();
        $category = $category->category;

        $subCategory = collect(['id'=>$id, 'sub_category'=>$sub_category, 'image'=> $image, 'category' => $category ]);

        return $subCategory;
    }

    public function updateSubCategory($data, $id)
    {
        $category = Category::where('category', $data->category)->first();
        $subCategory = SubCategory::find($id);

        if(empty($data->image)) {
            $subCategory->sub_category = $data->sub_category;
            $subCategory->slug_sub_category = Transliterate::slugify($data->sub_category);

            if($subCategory->category_id === $category->id){
                $subCategory->save();
            } else {
                $category->SubCategory()->save($subCategory);
            }

        } elseif(empty($data->sub_category)){
            Storage::delete($subCategory->path);
            $path = Storage::putFile('public/catalog', $data->image);
            $url = Storage::url($path);
            $subCategory->path = $path;
            $subCategory->link = $url;

            if($subCategory->category_id === $category['id']){
                $subCategory->save();
            } else {
                $category->SubCategory()->save($subCategory);
            }

        } else {
            $subCategory->sub_category = $data->sub_category;
            $subCategory->slug_sub_category = Transliterate::slugify($data->sub_category);

            Storage::delete( $subCategory->path);
            $path = Storage::putFile('public/catalog', $data->image);
            $url = Storage::url($path);
            $subCategory->path = $path;
            $subCategory->link = $url;

            if($subCategory->category_id === $category['id']){
                $subCategory->save();
            } else {
                $category->SubCategory()->save($subCategory);
            }
        }

        return $subCategory;
    }

    public function destroy($id)
    {
        $subCategory = SubCategory::find($id);

        Storage::delete($subCategory->path);
        $subCategory->delete();
    }

}
