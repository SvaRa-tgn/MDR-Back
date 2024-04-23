<?php

namespace App\Actions\CatalogPage;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Services\Catalog\CatalogService;
use Illuminate\View\View;

class CatalogAction
{
    public function __construct(private CategoryRepository $action, private CatalogService $service){}

    public function execute(): View
    {
        $categories = $this->action->category();
        $head = $this->service->titlePage();

        return view('/app-page/catalog-page/catalog-box/catalog', ['categories' => $categories, 'head' => $head]);
    }

}
