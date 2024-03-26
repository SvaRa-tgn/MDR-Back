<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use App\Services\Admin\Product\ProductCompilationService;
use Illuminate\View\View;

class ModulCompilationAction
{
    public $action;
    private CategoryRepository $category;
    private ColorRepository $color;
    private ProductCompilationService $service;

    public function __construct(ItemCollectionRepository $action,
                                CategoryRepository $category,
                                ColorRepository $color,
                                ProductCompilationService $service)
    {
        $this->action = $action;
        $this->category = $category;
        $this->color = $color;
        $this->service = $service;
    }

    public function execute(): View
    {
        $categories = $this->category->category();
        $colors = $this->color->color();
        $item_collections = $this->action->modulCollections();
        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/product/modul-compilation',
            [
                'categories' => $categories,
                'colors' => $colors,
                'item_collections' => $item_collections,
                'head' => $head
            ]);
    }

}
