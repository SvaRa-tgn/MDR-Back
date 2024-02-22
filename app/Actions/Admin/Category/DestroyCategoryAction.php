<?php

namespace App\Actions\Admin\Category;

use App\Http\Controllers\Controller;
use App\Interfaces\DestroyInterface;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;

class DestroyCategoryAction extends Controller
{
    public $action;

    public function __construct(CategoryRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id)
    {
        $this->action->destroy($id);

        return response()->json(route('category'));
    }

}
