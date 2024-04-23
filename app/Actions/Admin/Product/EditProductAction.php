<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Services\Admin\Product\UpdateProductService;
use App\Services\Index\FormatPriceService;
use Illuminate\View\View;

class EditProductAction
{
    public function __construct(private ProductRepository $product, private CategoryRepository $category,
                                private ColorRepository $color, private UpdateProductService $service){}

    public function execute(string $slugFullName): View
    {
        $product = FormatPriceService::formatPriceSingle($this->product->product($slugFullName));
        $categories = $this->category->category();
        $colors = $this->color->color();
        $images = $this->product->showImageProduct($product);
        $head = $this->service->editTitle($product->full_name);


        return view('/app-page/admin-page/admin-box/product/update-product',
            [
                'head' => $head,
                'product' => $product,
                'categories' => $categories,
                'colors' => $colors,
                'images' => $images,
            ]);
    }

}
