<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\ChooseProductAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ChooseProductsController extends Controller
{
    public function chooseProducts(ChooseProductAction $action): View
    {
        return $action->execute();
    }

}
