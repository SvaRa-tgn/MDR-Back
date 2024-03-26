<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\ModulCompilationAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ModulCompilationController extends Controller
{
    public function createCompilation(ModulCompilationAction $action): View
    {
        return $action->execute();
    }

}
