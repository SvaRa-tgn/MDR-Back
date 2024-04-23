<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOupdateStatus;
use App\Http\Requests\AdminPage\Product\UpdateStatusRequest;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\RedirectResponse;

class UpdateStatusAction
{
    public function __construct(private ProductRepository $product){}

    public function execute(UpdateStatusRequest $request, int $id): RedirectResponse
    {
        $product = $this->product->updateStatus(DTOupdateStatus::fromUpdateStatusRequest($request), ProductRepository::productFind($id));

        if($product->type === 'Комплект'){
            return redirect()->route('editModulCompilation', $product->slug_full_name);
        } else {
            return redirect()->route('editProduct', $product->slug_full_name);
        }
    }

}
