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
use App\Services\Index\FormatPriceService;
use Illuminate\Database\Eloquent\Collection;
use Transliterate;

class ProductRepository implements ProductRepositoryInterfaces
{
    public static function productFind(int $id): Product
    {
        return Product::find($id);
    }

    public static function productFindName (string $name): Product
    {
        return Product::where('full_name', $name)->first();
    }

    public function productFindItemCollection(int $id): Collection
    {
        return Product::where('collection_id', $id)->get();
    }

    public function sampleProducts(SubCategory $subCategory): Collection
    {
        return $subCategory->Product;
    }

    public function createProduct(DTOcreateProduct $dto, ItemCollection $collection): Product
    {
        $product = new Product();
        $product->category_id = $dto->category;
        $product->sub_category_id = $dto->sub_category;
        $product->type = $dto->type;
        $product->collection_type = $collection->type_collection;
        $product->collection_id = $dto->collection;
        $product->full_name = $dto->full_name;
        $product->slug_full_name = $dto->slug_full_name;
        $product->small_name = $dto->small_name;
        $product->slug_small_name = $dto->slug_small_name;
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

        return $product;
    }

    public function createCompilation(DTOcreateModulCompilation $dto, ItemCollection $collection): Product
    {
        $product = new Product();
        $product->category_id = $dto->category;
        $product->sub_category_id = $dto->sub_category;
        $product->type = 'Комплект';
        $product->collection_type = $collection->type_collection;
        $product->collection_id = $dto->collection;
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

        return $product;
    }

    public function productAddModul(Product $product, Product $modul): Product
    {
        if($product->height < $modul->height){
            $product->height = $modul->height;
        }

        if($product->deep < $modul->deep){
            $product->deep = $modul->deep;
        }

        $product->width = $product->width + $modul->width;
        $product->price = $product->price + $modul->price;
        $product->save();

        return $product;
    }

    public function product(string $slugFullName): Product
    {
        $product = Product::join('colors as c1', 'products.color_fasad_id', '=', 'c1.id')
            ->join('colors as c2', 'products.color_korpus_id', '=', 'c2.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->leftjoin('item_collections', 'products.collection_id', '=', 'item_collections.id')
            ->leftjoin('carts','products.id', '=', 'carts.product_id' )
            ->select('products.*', 'categories.category', 'sub_categories.sub_category', 'c1.color as color_fasad', 'c1.link as link_fasad',
                'c2.color as color_korpus', 'c2.link as link_korpus', 'item_collections.collection', 'carts.user_id as cart')
            ->where('slug_full_name', $slugFullName)->firstOrFail();

        return $product;
    }

    public function subCategoryProduct(int $id): Collection
    {
        $products = Product::join('colors as c1', 'products.color_fasad_id', '=', 'c1.id')
            ->join('colors as c2', 'products.color_korpus_id', '=', 'c2.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->join('images', 'products.id', '=', 'images.product_id')
            ->leftjoin('carts','products.id', '=', 'carts.product_id' )
            ->select('products.*', 'c1.color as color_fasad', 'c2.color as color_korpus', 'images.link', 'images.status as stat', 'carts.user_id as cart')
            ->where('sub_category_id', $id)->where('products.status', 'Продажа')->where('images.status', 'top')
            ->orWhere('sub_category_id', $id)->where('products.status', 'Резерв')->where('images.status', 'top')->get();

        return $products;
    }

    public function showImageProduct(Product $product): Collection
    {
        return $product->image;
    }

    public function updateStatus(DTOupdateStatus $dto, Product $product): Product
    {
        $product->status = $dto->status;
        $product->save();

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

    public function updateData(DTOupdateProduct $dto, Product $product): Product
    {
        if($dto->category != 'null'){
            $product->category_id = $dto->category;
        }

        if($dto->sub_category != 'null'){
            $product->sub_category_id = $dto->sub_category;
        }

        if($dto->type != 'null'){
            $product->type = $dto->type;
        }

        if($dto->type_collection != 'null'){
            $product->collection_type = $dto->type_collection;
        }

        if($dto->collection != 'null'){
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

    public function productNoColor(int $id, int $noColor): Collection
    {
        $products = Product::where('color_korpus_id', $id)->orWhere('color_fasad_id', $id)->get();

        foreach($products as $product){
            if($product->color_korpus_id === $id){
                $product->color_korpus_id = $noColor;
            }

            if($product->color_fasad_id === $id){
                $product->color_fasad_id = $noColor;
            }

            $product->status = 'Не отображать';

            $product->save();
        }

        return $products;
    }

    public function destroyProduct(Product $product): void
    {
        $product->delete();
    }

    public function searchProduct(DTOsearchProduct $dto): array
    {
        return Product::where('full_name', 'LIKE', '%'.$dto->search.'%')
            ->orWhere('article', 'LIKE', '%'.$dto->search.'%')->get()->toArray();
    }

    public function searchIndexProducts(DTOsearchProduct $dto): Collection
    {
        return Product::where('full_name', 'LIKE', '%'.$dto->search.'%')->limit(6)->get();
    }

    public function searchSetupProduct(DTOsearchProduct $dto, string $page): array
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

    public function productsClass(string $page): array
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

    public function sampleModul(int $id): array
    {
        return Product::where('collection_id', $id)->where('type', 'Модуль')->where('status', '!=', 'Не отображать')->get()->toArray();
    }

    public function updateModul(Product $product, Collection $moduls): Product
    {
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

    public function broColors(int $id, string $type): Collection
    {
        $broColors = Product::join('colors as c1', 'products.color_fasad_id', '=', 'c1.id')
            ->join('colors as c2', 'products.color_korpus_id', '=', 'c2.id')
            ->join('images', 'products.id', '=', 'images.product_id')
            ->select('products.*', 'c1.link as color_fasad', 'c2.link as color_korpus', 'images.link', 'images.status as stat')
            ->where('collection_id', $id)->where('type', $type)->where('images.status', 'top')->get();

        return $broColors;
    }

    public function broProducts(Product $product): Collection
    {
        $broProducts = Product::join('images', 'products.id', '=', 'images.product_id')
            ->select('products.*', 'images.link', 'images.status as stat')
            ->where('sub_category_id', $product->sub_category_id)->where('products.status', '!=', 'Не отображать')->where('images.status', 'top')
            ->inRandomOrder()->limit(6)->get();

        return $broProducts;
    }

    public function allModuls(int $id): Collection
    {
        $allModuls = Product::join('images', 'products.id', '=', 'images.product_id')
            ->select('products.*', 'images.link', 'images.status as stat')
            ->where('collection_id', $id)->where('type', 'Модуль')->where('products.status', '!=', 'Не отображать')
            ->where('images.status', 'top')->orderBy('small_name')->get();

        return $allModuls;
    }

    public function recomendationProducts(Product $product): Collection
    {
        $rProducts = Product::join('images', 'products.id', '=', 'images.product_id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->select('products.*', 'images.link', 'sub_categories.sub_category', 'images.status as stat')
            ->where('sub_category_id', '!=', $product->sub_category_id)->where('type', '!=', 'Модуль')->where('products.status', '!=', 'Не отображать')->where('images.status', 'top')
            ->inRandomOrder()->limit(10)->get();

        return $rProducts;
    }
}
