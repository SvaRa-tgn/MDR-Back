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

    public function edit($id)
    {
        $category = Category::find($id);
        $id = $category->id;
        $name = $category->name;

        $image = $category->imageStatic()->first();
        $image = $image->link;

        $category = collect(['id'=>$id, 'name'=>$name, 'image'=> $image ]);

        return $category;
    }

    public function update($data, $id)
    {
        if(empty($data['image'])){
            $category = Category::find($id);
            $category->name = $data['category'];
            $category->save();

        } else {
            $category = Category::find($id);
            $category->name = $data['category'];
            $category->save();

            $image = $category->imageStatic()->first();
            Storage::delete( $image->link);
            $path = Storage::putFile('catalog', $data['image']);
            $image->link = $path;
            $category->imageStatic()->save($image);
        }

        return $category;
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        $image = $category->imageStatic()->first();
        Storage::delete( $image->link);
        $image->delete();
        $category->delete();
    }

}
