<?php


namespace App\Http\Controllers\Page\AdminPage\Color;

use App\Actions\Admin\Color\DestroyColorAction;
use Illuminate\Http\Request;

class DestroyColorController extends DestroyColorAction
{
    public function destroyColor(DestroyColorAction $action, Request $request, $id)
    {
        return $action->execute($id);
    }

}
