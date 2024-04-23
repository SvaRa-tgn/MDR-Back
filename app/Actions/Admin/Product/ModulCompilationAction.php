<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use App\Services\Admin\Product\ProductCompilationService;
use Illuminate\View\View;

class ModulCompilationAction
{
    public function __construct(private ItemCollectionRepository $collection, private CategoryRepository $category,
                                private ColorRepository $color, private ProductCompilationService $service){}

    public function execute(): View
    {
        $categories = $this->category->category();
        $colors = $this->color->color();
        $item_collections = $this->collection->modulCollections();
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
