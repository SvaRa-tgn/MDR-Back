<?php

namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\CategoryAction;
use App\Http\Controllers\Controller;
use App\Interfaces\ShowInterface;

class CategoryController extends Controller
{
    public function category(CategoryAction $action)
    {
        return $action->execute();
    }

}
