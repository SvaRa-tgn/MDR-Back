<?php


namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SampleAction;

class SampleController extends SampleAction
{
    public function sample(SampleAction $action, $id)
    {
        return $action->execute($id);
    }

}
