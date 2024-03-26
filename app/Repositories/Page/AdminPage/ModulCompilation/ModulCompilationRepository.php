<?php

namespace App\Repositories\Page\AdminPage\ModulCompilation;

use App\DTO\DTOaddModul;
use App\Models\ModulCompilation;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Transliterate;

class ModulCompilationRepository
{
    public function showModulCompilation($slug_full_name): Collection
    {
        $product = Product::where('slug_full_name', $slug_full_name)->first();

        $modul = ModulCompilation::leftjoin('products as p1', 'modul_compilations.compilation_id', '=', 'p1.id')
            ->leftjoin('products as p2', 'modul_compilations.product_id', '=', 'p2.id')
            ->select('modul_compilations.*', 'modul_compilations.id as ids', 'p1.slug_full_name as modul_name', 'p2.*')
            ->where('compilation_id', $product->id)->get();

        return $modul;
    }

    public function addModul($modul_item, $id): Product
    {
        $modul = new ModulCompilation();
        $modul->compilation_id = $id;
        $modul->product_id = $modul_item->id;
        $modul->save();

        $product = Product::find($id);

        if($product->height < $modul_item->height){
            $product->height = $modul_item->height;
        }

        if($product->deep < $modul_item->deep){
            $product->deep = $modul_item->deep;
        }

        $product->width = $product->width + $modul_item->width;
        $product->price = $product->price + $modul_item->price;
        $product->save();

        return $product;
    }

    public function destroyModul($id): void
    {
        $modul = ModulCompilation::find($id);
        $modul->delete();
    }

}
