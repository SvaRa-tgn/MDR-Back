<?php


namespace App\Repositories\Page\AdminPage\Category;

use App\Http\Requests\AdminPage\Category\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\CategoryImage;
use App\Repositories\Page\AdminPage\Category\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class CategoryRepository implements CategoryRepositoryInterface
{
    public function createCategory($data)
    {
        $category = New Category();
        $category->name = $data->category;
        $category->save();

        $image = New CategoryImage();
        $path = Storage::putFile('/public', $data->image);
        $image->link = $path;
        $category->CategoryImage()->save($image);
    }

    public function showCategory()
    {

        $categories = Category::all();
        return $categories;
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        $id = $category->id;
        $name = $category->name;

        $image = $category->CategoryImage()->first();
        $image = $image->link;

        $category = collect(['id'=>$id, 'name'=>$name, 'image'=>$image ]);

        return $category;
    }

    public function updateCategory($data, $id)
    {
        if(empty($data->image)) {
            $category = Category::find($id);
            $category->name = $data->category;
            $category->save();

        } elseif(empty($data->category)){
            $category = Category::find($id);

            $image = $category->CategoryImage()->first();
            Storage::delete( $image->link);
            $path = Storage::putFile('catalog', $data->image);
            $image->link = $path;
            $category->CategoryImage()->save($image);

        } else {
            $category = Category::find($id);
            $category->name = $data->category;
            $category->save();

            $image = $category->CategoryImage()->first();
            Storage::delete( $image->link);
            $path = Storage::putFile('catalog', $data->image);
            $image->link = $path;
            $category->CategoryImage()->save($image);
        }

        return $category;
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        $image = $category->CategoryImage()->first();
        Storage::delete( $image->link);
        $image->delete();
        $category->delete();
    }

}
