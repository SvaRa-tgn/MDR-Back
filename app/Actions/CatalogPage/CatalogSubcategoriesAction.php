<?php

namespace App\Actions\CatalogPage;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Services\Catalog\CatalogSubcategoriesService;
use Illuminate\View\View;

class CatalogSubcategoriesAction
{
    public $action;
    public $service;
    public $category;

    public function __construct(SubCategoryRepository $action, CatalogSubcategoriesService $service, CategoryRepository $category)
    {
        $this->action = $action;
        $this->category = $category;
        $this->service = $service;
    }

    public function execute($category): View
    {
        $article = $this->category->editCategory($category);
        $subcategories = $this->action->catalogSubcategories($article);
        $head = $this->service->editTitlePage($article->category);

        return view('/app-page/catalog-page/catalog-box/catalog-sub-categories', ['subcategories' => $subcategories, 'head' => $head, 'article' => $article]);
    }

}
