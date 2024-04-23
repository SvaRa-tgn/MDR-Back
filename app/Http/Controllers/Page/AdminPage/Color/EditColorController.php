<?php

namespace App\Http\Controllers\Page\AdminPage\Color;

use App\Actions\Admin\Color\EditColorAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class EditColorController extends Controller
{
    public function editColor(EditColorAction $action, string $slugColor): View
    {
        return $action->execute($slugColor);
    }

}
