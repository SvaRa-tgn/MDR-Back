<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Repositories\Page\AdminPage\ModulCompilation\ModulCompilationRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Services\Admin\Product\UpdateProductService;
use Illuminate\View\View;

class EditModulCompilationAction
{
    public $action;
    private ColorRepository $color;
    private UpdateProductService $service;
    private ModulCompilationRepository $modul;

    public function __construct(ProductRepository $action,
                                ColorRepository $color,
                                ModulCompilationRepository $modul,
                                UpdateProductService $service)
    {
        $this->action = $action;
        $this->color = $color;
        $this->service = $service;
        $this->modul = $modul;
    }

    public function execute($slug_full_name)
    {
        $product = $this->action->product($slug_full_name);
        if(isset($product)){
            $colors = $this->color->color();
            $images = $this->action->showImageProduct($slug_full_name);
            $moduls = $this->modul->showModulCompilation($slug_full_name);
            $sample_moduls = $this->action->sampleModul($product->collection_id);
            $head = $this->service->editTitle($product->full_name);
        } else {
            return abort(404);
        }

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
