<?php

namespace App\Actions\CatalogPage;

use App\Models\Category;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Services\Catalog\CatalogSubcategoriesService;
use Illuminate\View\View;

class CatalogSubcategoriesAction
{
    public function __construct(private SubCategoryRepository $subCategory, private CatalogSubcategoriesService $service,
                                private CategoryRepository $category){}

    public function execute(string $slugCategory): View
    {
        $category = $this->category->getCategory($slugCategory);
        $subcategories = $this->subCategory->catalogSubcategories($category);
        $head = $this->service->editTitlePage($category->category);
        $article = $category->category;

        return view('/app-page/catalog-page/catalog-box/catalog-sub-categories', ['subcategories' => $subcategories, 'head' => $head,
            'category' => $category, 'article' => $article]);
    }

}
