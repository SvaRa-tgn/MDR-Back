<?php

namespace App\Repositories\Page\AdminPage\ModulCompilation;

use App\Models\ModulCompilation;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Transliterate;

class ModulCompilationRepository
{
    public function showModulCompilation(Product $product): Collection
    {
        $moduls = ModulCompilation::leftjoin('products as p1', 'modul_compilations.compilation_id', '=', 'p1.id')
            ->leftjoin('products as p2', 'modul_compilations.product_id', '=', 'p2.id')
            ->leftjoin('images', 'modul_compilations.product_id', '=', 'images.product_id')
            ->select('modul_compilations.*', 'modul_compilations.id as ids', 'p1.slug_full_name as modul_name', 'p2.*', 'images.link', 'images.status as istatus')
            ->where('compilation_id', $product->id)->where('images.status', 'top')->get();

        return $moduls;
    }

    public function addModul(Product $product, int $id): ModulCompilation
    {
        $modul = new ModulCompilation();
        $modul->compilation_id = $id;
        $modul->product_id = $product->id;
        $modul->save();

        return $modul;
    }

    public function destroyModul(int $id): void
    {
        $modul = ModulCompilation::find($id);
        $modul->delete();
    }

    public function destroyModulCompilation(int $id): void
    {
        $moduls = ModulCompilation::where('compilation_id', $id)->get();

        foreach ($moduls as $modul){
            $modul->delete();
        }
    }

}
