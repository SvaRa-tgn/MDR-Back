<?php


namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\EditProductAction;
use App\Http\Requests\AdminPage\Product\SampleProductRequest;

class EditProductController extends EditProductAction
{
    public function editShow(EditProductAction $action)
    {
        return $action->execute();
    }

}
