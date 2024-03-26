<?php

namespace App\Actions\Admin\Product;

use App\Services\Admin\Product\ChooseProductService;
use Illuminate\View\View;

class ChooseProductAction
{
    public $service;

    public function __construct(ChooseProductService $service)
    {
        $this->service = $service;
    }

    public function execute(): View
    {
        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/product/choose-products', compact('head'));

    }

}
