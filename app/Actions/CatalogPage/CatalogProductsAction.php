<?php

namespace App\Actions\CatalogPage;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use App\Services\Catalog\CatalogSubcategoriesService;
use App\Services\Index\FormatPriceService;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CatalogProductsAction
{
    public function __construct(private SubCategoryRepository $subCategory, private CatalogSubcategoriesService $service,
                                private CategoryRepository $category, private ProductRepository $products,
                                private ProfileRepository $profile){}

    public function execute(string $slugCategory, string $slugSubCategory): View
    {
        if(Auth::check()){
            $user = $this->profile->profile();
        } else {
            $user = null;
        }
        $category = $this->category->getCategory($slugCategory);
        $subCategory = $this->subCategory->getSubCategory($slugSubCategory);
        $products = FormatPriceService::formatPrice($this->products->subCategoryProduct($subCategory->id));
        $head = $this->service->editTitlePage($subCategory->sub_category);
        $article = $subCategory->sub_category;

        return view('/app-page/catalog-page/catalog-box/catalog-products', ['subCategory' => $subCategory, 'head' => $head, 'category' => $category,
            'products' => $products, 'user' => $user, 'article' => $article]);
    }

}
