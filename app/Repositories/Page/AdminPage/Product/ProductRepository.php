<?php


namespace App\Repositories\Page\AdminPage\Product;

use App\Models\Category;
use App\Models\Color;
use App\Models\Image;
use App\Models\ModulCollection;
use App\Models\Product;
use App\Models\ReadyCollection;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Transliterate;

class ProductRepository
{
    public function Sample($id)
    {
        $sub_categories = SubCategory::where('category_id', $id)->get();

        return $sub_categories;
    }

    public function sampleProducts($data)
    {
        $sub_category = SubCategory::find($data->sub_category);
        $products = $sub_category->products;

        return $products;
    }

    public function subCategoriesShow()
    {
        $sub_categories = SubCategory::all();

        return $sub_categories;
    }

    public function modulCollectionShow()
    {
        $modul_collection = ModulCollection::all();

        return $modul_collection;
    }

    public function readyCollectionShow()
    {
        $ready_collection = ReadyCollection::all();

        return $ready_collection;
    }

    public function colorShow()
    {
        $color = Color::all();

        return $color;
    }

    public function createProduct($data)
    {
        $product = new Product();
        $product->category_id = $data->category;
        $product->sub_category_id = $data->sub_category;
        $product->type = $data->type;
        $product->type_modul = $data->type_modul;
        $product->item_modul = $data->item_modul;
        $product->item_ready = $data->item_ready;
        $product->full_name = $data->full_name;
        $product->slug_full_name = Transliterate::slugify($data->full_name);
        $product->small_name = $data->small_name;
        $product->slug_small_name = Transliterate::slugify($data->small_name);
        $product->article = 'ЦБ-'.$data->article;
        $product->height = $data->height;
        $product->width = $data->width;
        $product->deep = $data->deep;
        $product->status = $data->status;
        $product->korpus = $data->korpus;
        $product->fasad = $data->fasad;
        $product->color_korpus_id = $data->color_korpus_id;
        $product->color_fasad_id = $data->color_fasad_id;
        $product->price = $data->price;
        $product->save();

        $image = new Image();
        $path = Storage::putFile('public/image', $data->image_top);
        $url = Storage::url($path);
        $image->path = $path;
        $image->link = $url;
        $image->status = 'top';
        $product->image()->save($image);

        if (isset($data->image) and $data->image !== 'null') {
            $image = new Image();
            $path = Storage::putFile('public/image', $data->image);
            $url = Storage::url($path);
            $image->path = $path;
            $image->link = $url;
            $image->status = 'stock';
            $product->image()->save($image);
        }

        if (isset($data->image1) and $data->image1 !== 'null') {
            $image = new Image();
            $path = Storage::putFile('public/image', $data->image1);
            $url = Storage::url($path);
            $image->path = $path;
            $image->link = $url;
            $image->status = 'stock';
            $product->image()->save($image);
        }

        if (isset($data->image2) and $data->image2 !== 'null') {
            $image = new Image();
            $path = Storage::putFile('public/image', $data->image2);
            $url = Storage::url($path);
            $image->path = $path;
            $image->link = $url;
            $image->status = 'stock';
            $product->image()->save($image);
        }

        if (isset($data->image3) and $data->image3 !== 'null') {
            $image = new Image();
            $path = Storage::putFile('public/image', $data->image3);
            $url = Storage::url($path);
            $image->path = $path;
            $image->link = $url;
            $image->status = 'stock';
            $product->image()->save($image);
        }
    }

    public function showUpdateProduct($slug_full_name)
    {
        $id = Product::where('slug_full_name', $slug_full_name)->pluck('id')->collect();
        $product = Product::find($id['0']);
        return $product;
    }

    public function showImageProduct($slug_full_name)
    {
        $id = Product::where('slug_full_name', $slug_full_name)->pluck('id')->collect();
        $product = Product::find($id['0']);
        $images = $product->image;
        return $images;
    }

    public function updateStatus($data, $id)
    {
        $product = Product::find($id);

        $product->status = $data->status;
        $product->save();

        return $product;
    }

    public function addImage($data, $id)
    {
        $product = Product::find($id);

        $image = new Image();
        $path = Storage::putFile('public/image', $data->image);
        $url = Storage::url($path);
        $image->path = $path;
        $image->link = $url;
        $image->status = 'stock';
        $product->image()->save($image);

        return $product;
    }

    public function updateImage($data, $id)
    {
        $product = Product::find($data->id);

        $image = Image::find($id);
        Storage::delete($image->path);
        $path = Storage::putFile('public/image', $data->image);
        $url = Storage::url($path);
        $image->path = $path;
        $image->link = $url;
        $image->save();

        return $product;
    }

    public function destroyImage($data, $id)
    {
        $product = Product::find($data->id);

        $image = Image::find($id);
        Storage::delete($image->path);
        $image->delete();

        return $product;
    }

    public function updateData($data, $id)
    {
        $product = Product::find($id);

        if($data->category != 'null'){
            $product->category_id = $data->category;
        }

        if($data->sub_category != 'null'){
            $product->sub_category_id = $data->sub_category;
        }

        if($data->type != 'null'){
            $product->type = $data->type;
        }

        if($data->type_modul != 'null'){
            $product->type_modul = $data->type_modul;
        }

        if($data->item_modul != 'null'){
            $product->item_modul = $data->item_modul;
        }

        if($data->item_ready != 'null'){
            $product->item_ready = $data->item_ready;
        }

        if($data->full_name != 'null'){
            $product->full_name = $data->full_name;
            $product->slug_full_name = Transliterate::slugify($data->full_name);
        }

        if($data->small_name != 'null'){
            $product->small_name = $data->small_name;
            $product->slug_small_name = Transliterate::slugify($data->small_name);
        }

        if($data->article != 'null'){
            $product->article = 'ЦБ-'.$data->article;
        }

        if($data->height != 0){
            $product->height = $data->height;
        }

        if($data->width != 0){
            $product->width = $data->width;
        }

        if($data->deep != 0){
            $product->deep = $data->deep;
        }

        if($data->korpus != 'null'){
            $product->korpus = $data->korpus;
        }

        if($data->fasad != 'null'){
            $product->fasad = $data->fasad;
        }

        if($data->color_korpus_id != 'null'){
            $product->color_korpus_id = $data->color_korpus_id;
        }

        if($data->color_fasad_id != 'null'){
            $product->color_fasad_id = $data->color_fasad_id;
        }

        if($data->price != 0){
            $product->price = $data->price;
        }

        $product->save();

        return $product;
    }

    public function destroyProduct($id)
    {
        $product = Product::find($id);

        $images = $product->image;
        foreach ($images as $image){
            Storage::delete($image->path);
            $image->delete();
        }

        $product->delete();
    }
}
