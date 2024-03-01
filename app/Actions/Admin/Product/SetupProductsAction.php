<?php

namespace App\Actions\Admin\Product;

use App\Services\Admin\Product\SetupProductsService;

class SetupProductsAction
{
    private SetupProductsService $service;

    public function __construct(SetupProductsService $service)
    {
        $this->service = $service;
    }

    public function execute()
    {
        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/product/setup-products', compact('head'));

    }

}
