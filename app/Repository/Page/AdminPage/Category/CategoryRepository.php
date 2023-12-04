<?php


namespace App\Repository\Page\AdminPage\Category;


use App\Models\Category;
use App\Models\ImageStatic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class CategoryRepository
{
    public function create($data)
    {
        $category = New Category();
        $category->name = $data->category;
        $category->save();

        $image = New ImageStatic();
        $path = Storage::putFile('catalog', $data->image);
        $image->link = $path;
        $category->imageStatic()->save($image);
    }

    public function show()
    {
        $categories = Category::all();

        return $categories;
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
