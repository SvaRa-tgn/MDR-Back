<?php

namespace App\Actions\CatalogPage;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\ModulCompilation\ModulCompilationRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use App\Services\Catalog\CatalogSubcategoriesService;
use App\Services\Index\FormatPriceService;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CatalogProductPageAction
{
    public function __construct(private SubCategoryRepository $subCategory, private CatalogSubcategoriesService $service,
                                private CategoryRepository $category, private ProductRepository $product, private ModulCompilationRepository $modul,
                                private ProfileRepository $profile){}

    public function execute(string $slugCategory, string $slugSubCategory, string $slugFullName): View
    {
        $category = $this->category->getCategory($slugCategory);
        $subCategory = $this->subCategory->getSubCategory($slugSubCategory);
        if (Auth::check()) {
            $user = $this->profile->profile();
        } else {
            $user = null;
        }
        $product = FormatPriceService::formatPriceSingle($this->product->product($slugFullName));
        $images = $this->product->showImageProduct($product);
        $broColors = $this->product->broColors($product->collection_id, $product->type);
        $broProducts = FormatPriceService::formatPrice($this->product->broProducts($product)) ;
        $moduls = FormatPriceService::formatPrice($this->modul->showModulCompilation($product));
        $allModuls = FormatPriceService::formatPrice($this->product->allModuls($product->collection_id));
        $rProducts = FormatPriceService::formatPrice($this->product->recomendationProducts($product));
        $head = $this->service->editTitlePage($product->full_name);
        $article = $subCategory->sub_category;

        return view('/app-page/catalog-page/catalog-box/product', ['subCategory' => $subCategory, 'head' => $head, 'category' => $category,
            'product' => $product, 'images' => $images, 'broColors' => $broColors, 'broProducts' => $broProducts, 'article' => $article, 'moduls' => $moduls, 'allModuls' => $allModuls,
            'rProducts' => $rProducts, 'user' => $user]);

    }

}
