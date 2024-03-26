<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOupdateStatus;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\RedirectResponse;

class UpdateStatusAction
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id): RedirectResponse
    {
        $product = $this->action->updateStatus(DTOupdateStatus::fromUpdateStatusRequest($request), $id);

        if($product->type === 'Комплект'){
            return redirect()->route('editModulCompilation', $product->slug_full_name);
        } else {
            return redirect()->route('editProduct', $product->slug_full_name);
        }
    }

}
