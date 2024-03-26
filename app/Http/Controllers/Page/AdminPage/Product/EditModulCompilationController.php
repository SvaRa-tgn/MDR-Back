<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\EditModulCompilationAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class EditModulCompilationController extends Controller
{
    public function editModulCompilation(EditModulCompilationAction $action, $slug_full_name): View
    {
        return $action->execute($slug_full_name);
    }

}
