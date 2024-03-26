<?php

namespace App\Repositories\Page\AdminPage\Product;

use App\DTO\DTOaddImage;
use App\DTO\DTOaddModul;
use App\DTO\DTOcreateModulCompilation;
use App\DTO\DTOcreateProduct;
use App\DTO\DTOdestroyImage;
use App\DTO\DTOsampleProduct;
use App\DTO\DTOsearchProduct;
use App\DTO\DTOupdateImage;
use App\DTO\DTOupdateProduct;
use App\DTO\DTOupdateStatus;
use App\Models\Image;
use App\Models\ItemCollection;
use App\Models\ModulCompilation;
use App\Models\Product;
use App\Models\SubCategory;
use App\Repositories\Page\AdminPage\Product\Interfaces\ProductRepositoryInterfaces;
use App\Services\Admin\UpdateStroageService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Transliterate;

class ProductRepository implements ProductRepositoryInterfaces
{
    public function sampleProducts(DTOsampleProduct $dto): Collection
    {
        $sub_category = SubCategory::find($dto->sub_category);
        $products = $sub_category->products;

        return $products;
    }

    public function createProduct(DTOcreateProduct $dto): Product
    {
        $product = new Product();
        $product->category_id = $dto->category;
        $product->sub_category_id = $dto->sub_category;
        $product->type = $dto->type;
        if($dto->collection !== 'null'){
            $collection = ItemCollection::find($dto->collection);

            $product->collection_type = $collection->type_collection;
            $product->collection_id = $dto->collection;
        }
        $product->full_name = $dto->full_name;
        $product->slug_full_name = $dto->slug_full_name;;
        $product->small_name = $dto->small_name;
        $product->slug_small_name = $dto->slug_small_name;;
        $product->article = 'ЦБ-'.$dto->article;
        $product->height = $dto->height;
        $product->width = $dto->width;
        $product->deep = $dto->deep;
        $product->status = $dto->status;
        $product->korpus = $dto->korpus;
        $product->fasad = $dto->fasad;
        $product->color_korpus_id = $dto->color_korpus_id;
        $product->color_fasad_id = $dto->color_fasad_id;
        $product->price = $dto->price;
        $product->save();

        foreach ($dto->imageArr as $key => $item){
            if($item !== 'null'){
                $image = new Image();
                $storage = 'public/image';
                $result = UpdateStroageService::updateImage($storage, $item);
                $image->link = $result['url'];
                $image->path = $result['path'];
                if($key === 'image_top'){
                    $image->status = 'top';
                } else {
                    $image->status = 'stock';
                }
                $product->image()->save($image);
            }
        };

        return $product;
    }

    public function createCompilation(DTOcreateModulCompilation $dto): Product
    {
        $product = new Product();
        $product->category_id = $dto->category;
        $product->sub_category_id = $dto->sub_category;
        if($dto->collection !== 'null'){
            $collection = ItemCollection::find($dto->collection);
            $product->type = 'Комплект';
            $product->collection_type = $collection->type_collection;
            $product->collection_id = $dto->collection;
        }
        $product->full_name = $dto->full_name;
        $product->slug_full_name = $dto->slug_full_name;;
        $product->small_name = $dto->small_name;
        $product->slug_small_name = $dto->slug_small_name;;
        $product->article = 'ЦБ-'.$dto->article;
        $product->status = $dto->status;
        $product->korpus = $dto->korpus;
        $product->fasad = $dto->fasad;
        $product->color_korpus_id = $dto->color_korpus_id;
        $product->color_fasad_id = $dto->color_fasad_id;
        $product->save();

        foreach ($dto->imageArr as $key => $item){
            if($item !== 'null'){
                $image = new Image();
                $storage = 'public/image';
                $result = UpdateStroageService::updateImage($storage, $item);
                $image->link = $result['url'];
                $image->path = $result['path'];
                if($key === 'image_top'){
                    $image->status = 'top';
                } else {
                    $image->status = 'stock';
                }
                $product->image()->save($image);
            }
        }

        foreach ($dto->modul_items as $items){
            $modul = Product::where('full_name', $items)->first();

            if($product->height < $modul->height){
                $product->height = $modul->height;
            }

            if($product->deep < $modul->deep){
                $product->deep = $modul->deep;
            }

            $product->width = $product->width + $modul->width;
            $product->price = $product->price + $modul->price;
            $product->save();

            $modul_compilation = new ModulCompilation();
            $modul_compilation->compilation_id = $product->id;
            $modul_compilation->product_id = $modul->id;
            $modul_compilation->save();
        }

        return $product;
    }

    public function product($slug_full_name): Product| null
    {
        $product = Product::join('colors as c1', 'products.color_fasad_id', '=', 'c1.id')
            ->join('colors as c2', 'products.color_korpus_id', '=', 'c2.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.category_id', '=', 'sub_categories.id')
            ->leftjoin('item_collections', 'products.collection_id', '=', 'item_collections.id')
            ->select('products.*', 'categories.category', 'sub_categories.sub_category', 'c1.color as color_fasad', 'c1.link as link_fasad',
                'c2.color as color_korpus', 'c2.link as link_korpus', 'item_collections.collection')
            ->where('slug_full_name', $slug_full_name)->first();

        return $product;
    }

    public function showImageProduct($slug_full_name): Collection
    {
        $id = Product::where('slug_full_name', $slug_full_name)->pluck('id')->collect();
        $product = Product::find($id['0']);
        $images = $product->image;
        return $images;
    }

    public function updateStatus(DTOupdateStatus $dto, $id): Product
    {
        $product = Product::find($id);

        $product->status = $dto->status;
        $product->save();

        return $product;
    }

    public function addImage(DTOaddImage $dto, $id): Product
    {
        $product = Product::find($id);

        $images = $product->image;

        if($images->isEmpty()) {
            $status = 'top';
        } else {
            $status = 'stock';
        }

        $image = new Image();
        $storage = 'public/image';
        $result = UpdateStroageService::updateImage($storage, $dto->image);
        $image->link = $result['url'];
        $image->path = $result['path'];
        $image->status = $status;
        $product->image()->save($image);

        return $product;
    }

    public function updateImage(DTOupdateImage $dto, $id): Product
    {
        $product = Product::find($dto->id);

        $image = Image::find($id);
        UpdateStroageService::deleteImage($image->path);
        $storage = 'public/image';
        $result = UpdateStroageService::updateImage($storage, $dto->image);
        $image->link = $result['url'];
        $image->path = $result['path'];
        $image->save();

        return $product;
    }

    public function destroyImage(DTOdestroyImage $dto, $id): Product
    {
        $product = Product::find($dto->id);

        $image = Image::find($id);
        UpdateStroageService::deleteImage($image->path);
        $image->delete();

        return $product;
    }

    public function updateData(DTOupdateProduct $dto, $id): Product
    {
        $product = Product::find($id);

        if($dto->category != 'null'){
            $product->category_id = $dto->category;
        }

        if($dto->sub_category != 'null'){
            $product->sub_category_id = $dto->sub_category;
        }

        if($dto->type != 'null'){
            $product->type = $dto->type;
        }

        if($dto->collection !== 'null'){
            $collection = ItemCollection::find($dto->collection);

            $product->collection_type = $collection->type_collection;
            $product->collection_id = $dto->collection;
        }

        if($dto->full_name != 'null'){
            $product->full_name = $dto->full_name;
            $product->slug_full_name = $dto->slug_full_name;
        }

        if($dto->small_name != 'null'){
            $product->small_name = $dto->small_name;
            $product->slug_small_name = $dto->slug_small_name;;
        }

        if($dto->article != 'null'){
            $product->article = 'ЦБ-'.$dto->article;
        }

        if($dto->height != 0){
            $product->height = $dto->height;
        }

        if($dto->width != 0){
            $product->width = $dto->width;
        }

        if($dto->deep != 0){
            $product->deep = $dto->deep;
        }

        if($dto->korpus != 'null'){
            $product->korpus = $dto->korpus;
        }

        if($dto->fasad != 'null'){
            $product->fasad = $dto->fasad;
        }

        if($dto->color_korpus_id != 'null'){
            $product->color_korpus_id = $dto->color_korpus_id;
        }

        if($dto->color_fasad_id != 'null'){
            $product->color_fasad_id = $dto->color_fasad_id;
        }

        if($dto->price != 0){
            $product->price = $dto->price;
        }

        $product->save();

        return $product;
    }

    public function destroyProduct($id): void
    {
        $product = Product::find($id);

        $images = $product->image;
        foreach ($images as $image){
            UpdateStroageService::deleteImage($image->path);
            $image->delete();
        }

        $product->delete();
    }

    public function destroyModulCompilation($id): void
    {
        $moduls = ModulCompilation::where('compilation_id', $id)->get();

        foreach ($moduls as $modul){
            $modul->delete();
        }

    }

    public function searchProduct(DTOsearchProduct $dto): array
    {
        $products = Product::where('full_name', 'LIKE', '%'.$dto->search.'%')
            ->orWhere('article', 'LIKE', '%'.$dto->search.'%')->get()->toArray();

        return $products;
    }

    public function searchSetupProduct(DTOsearchProduct $dto, $page): array
    {
        if($page === 'v_prodazhe'){
            $products = Product::where('status', 'Продажа')->where('full_name', 'LIKE', '%'.$dto->search.'%')->get()->toArray();
        } else if ($page === 'rezerved') {
            $products = Product::where('status', 'Резерв')->where('full_name', 'LIKE', '%'.$dto->search.'%')->get()->toArray();
        } else if ($page === 'dont_display') {
            $products = Product::where('status', 'Не отображать')->where('full_name', 'LIKE', '%'.$dto->search.'%')->get()->toArray();
        } else if ($page === 'all_products'){
            $products = Product::where('full_name', 'LIKE', '%'.$dto->search.'%')->get()->toArray();
        }

        return $products;
    }

    public function productsClass($page): array
    {
        if($page === 'all_products') {
            $products = Product::all()->toArray();
        } else if($page === 'v_prodazhe'){
            $products = Product::where('status', 'Продажа')->get()->toArray();
        } else if ($page === 'rezerved') {
            $products = Product::where('status', 'Резерв')->get()->toArray();
        } else if ($page === 'dont_display') {
            $products = Product::where('status', 'Не отображать')->get()->toArray();
        }

        return $products;
    }

    public function sampleModul($id): array
    {
        return Product::where('collection_id', $id)->where('type', 'Модуль')->get()->toArray();
    }

    public function productId(DTOaddModul $dto): Product
    {
        return Product::find($dto->modul_item);
    }

    public function updateModul($productId): Product
    {
        $moduls = ModulCompilation::leftjoin('products as p1', 'modul_compilations.compilation_id', '=', 'p1.id')
            ->leftjoin('products as p2', 'modul_compilations.product_id', '=', 'p2.id')
            ->select('modul_compilations.*', 'p1.slug_full_name as modul_name', 'p2.*')
            ->where('compilation_id', $productId)->get();

        $product = Product::find($productId);
        $product->width = 0;
        $product->price = 0;

        foreach ($moduls as $modul){

            if($product->height < $modul->height){
                $product->height = $modul->height;
            }

            if($product->deep < $modul->deep){
                $product->deep = $modul->deep;
            }

            $product->width = $product->width + $modul->width;
            $product->price = $product->price + $modul->price;
            $product->save();
        }

        return $product;
    }
}
