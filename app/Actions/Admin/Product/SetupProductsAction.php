<?php

namespace App\Actions\Admin\Product;

use App\Services\Admin\Product\SetupProductsService;
use Illuminate\View\View;

class SetupProductsAction
{
    public function __construct(private SetupProductsService $service){}

    public function execute(): View
    {
        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/product/setup-products', compact('head'));

    }

}
