<?php

namespace App\Actions\CatalogPage;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Services\Catalog\CatalogService;
use Illuminate\View\View;

class CatalogAction
{
    public $action;

    public function __construct(CategoryRepository $action, CatalogService $service)
    {
        $this->action = $action;
        $this->service = $service;
    }

    public function execute(): View
    {
        $categories = $this->action->category();
        $head = $this->service->titlePage();

        return view('/app-page/catalog-page/catalog-box/catalog', ['categories' => $categories, 'head' => $head]);
    }

}
