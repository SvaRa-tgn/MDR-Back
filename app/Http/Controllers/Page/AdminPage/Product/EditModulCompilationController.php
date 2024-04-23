<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\EditModulCompilationAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class EditModulCompilationController extends Controller
{
    public function editModulCompilation(EditModulCompilationAction $action, string $slugFullName): View
    {
        return $action->execute($slugFullName);
    }

}
