<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Repositories\Page\AdminPage\ModulCompilation\ModulCompilationRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Services\Admin\Product\UpdateProductService;
use App\Services\Index\FormatPriceService;
use Illuminate\View\View;

class EditModulCompilationAction
{
    public function __construct(private ProductRepository $product, private ColorRepository $color,
                                private ModulCompilationRepository $modul, private UpdateProductService $service){}

    public function execute(string $slugFullName): View
    {
        $product = $this->product->product($slugFullName);
        $colors = $this->color->color();
        $images = $this->product->showImageProduct($product);
        $moduls = FormatPriceService::formatPrice($this->modul->showModulCompilation($product));
        $sample_moduls = $this->product->sampleModul($product->collection_id);
        $head = $this->service->editTitle($product->full_name);

        return view ('/app-page/admin-page/admin-box/product/update-modul-compilation',
            [
                'head' => $head,
                'product' => $product,
                'moduls' => $moduls,
                'sample_moduls' => $sample_moduls,
                'colors' => $colors,
                'images' => $images,
            ]);
    }

}
