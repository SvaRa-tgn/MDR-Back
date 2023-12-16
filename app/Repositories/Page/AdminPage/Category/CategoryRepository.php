<?php


namespace App\Repositories\Page\AdminPage\Category;

use App\Models\Category;
use App\Models\CategoryImage;
use App\Repositories\Page\AdminPage\Category\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use Transliterate;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function createCategory($data)
    {
        $category = New Category();
        $category->category = $data->category;
        $category->slug_category = Transliterate::slugify($data->category);
        $category->save();

        $image = New CategoryImage();
        $path = Storage::putFile('public/catalog', $data->image);
        $url = Storage::url($path);
        $image->path = $path;
        $image->link = $url;
        $category->CategoryImage()->save($image);
    }

    public function showCategory()
    {
        $categories = Category::all();
        return $categories;
    }

    public function editCategory($slug_category)
    {
        $category = Category::where('slug_category', $slug_category)->first();
        $id = $category->id;
        $name = $category->category;
        $slug_category = $category->slug_category;

        $image = $category->CategoryImage()->first();
        $image = $image->link;

        $category = collect(['id'=>$id, 'name'=>$name, 'slug_category'=>$slug_category, 'image'=>$image ]);

        return $category;
    }

    public function updateCategory($data, $id)
    {
        if(empty($data->image)) {
            $category = Category::find($id);
            $category->category = $data->category;
            $category->slug_category = Transliterate::slugify($data->category);
            $category->save();

        } elseif(empty($data->category)){
            $category = Category::find($id);

            $image = $category->CategoryImage()->first();
            Storage::delete( $image->path);
            $path = Storage::putFile('public/catalog', $data->image);
            $url = Storage::url($path);
            $image->path = $path;
            $image->link = $url;
            $category->CategoryImage()->save($image);

        } else {
            $category = Category::find($id);
            $category->category = $data->category;
            $category->slug_category = Transliterate::slugify($data->category);
            $category->save();

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

    public function destroy($slug_category)
    {
        $category = Category::where('slug_category', $slug_category)->first();

        $image = $category->CategoryImage()->first();
        Storage::delete($image->link);
        $image->delete();
        $category->delete();
    }

}
