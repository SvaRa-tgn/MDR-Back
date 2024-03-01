<?php


namespace App\Http\Controllers\Page\AdminPage\Color;

use App\Actions\Admin\Color\DestroyColorAction;
use App\Http\Controllers\Controller;

class DestroyColorController extends Controller
{
    public function destroyColor(DestroyColorAction $action, $id)
    {
        return $action->execute($id);
    }

}
