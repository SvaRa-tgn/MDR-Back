<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOupdateStatus;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class UpdateStatusAction extends Controller
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id)
    {
        $product = $this->action->updateStatus(DTOupdateStatus::fromUpdateStatusRequest($request), $id);

        return redirect()->route('updateProduct', $product->slug_full_name);
    }

}
