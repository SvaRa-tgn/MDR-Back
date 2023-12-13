<?php


namespace App\Repositories\Page\AdminPage\SubCategory;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Storage;

class SubCategoryRepository
{
    public function createSubCategory($data)
    {
        $category = Category::where('name', $data->category)->first();

        $subCategory = New SubCategory();
        $subCategory->sub_category = $data->sub_category;
        $path = Storage::putFile('catalog', $data->image);
        $subCategory->link = $path;
        $category->SubCategory()->save($subCategory);
    }

    public function showSubCategory()
    {
        $subCategories = SubCategory::all();

        return $subCategories;
    }

    public function editSubCategory($id)
    {
        $subCategory = SubCategory::find($id);
        $id = $subCategory->id;
        $name = $subCategory->sub_category;
        $image = $subCategory->link;
        $category = $subCategory->Category()->first();
        $category = $category->name;

        $subCategory = collect(['id'=>$id, 'name'=>$name, 'image'=> $image, 'category' => $category ]);

        return $subCategory;
    }

    public function updateSubCategory($data, $id)
    {
        $category = Category::where('name', $data->category)->first();

        if(empty($data->image)) {
            $subCategory = SubCategory::find($id);

            $subCategory->sub_category = $data->sub_category;

            if($subCategory->category_id === $category->id){
                $subCategory->save();
            } else {
                $category->SubCategory()->save($subCategory);
            }

        } elseif(empty($data->sub_category)){
            $subCategory = SubCategory::find($id);

            Storage::delete( $subCategory->link);
            $path = Storage::putFile('catalog', $data->image);
            $subCategory->link = $path;

            if($subCategory->category_id === $category['id']){
                $subCategory->save();
            } else {
                $category->SubCategory()->save($subCategory);
            }

        } else {
            $subCategory = SubCategory::find($id);

            $subCategory->sub_category = $data->sub_category;
            Storage::delete( $subCategory->link);
            $path = Storage::putFile('catalog', $data->image);
            $subCategory->link = $path;

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

        Storage::delete( $subCategory->link);
        $subCategory->delete();
    }

}
