<?php


namespace App\Services\Page\AdminPage\Category;

use App\Http\Controllers\Controller;
use App\Repository\Page\AdminPage\Category\CategoryRepository;

class CategoryService extends Controller
{
    public $service;

    public function __construct(CategoryRepository $service)
    {
        $this->service = $service;
    }
}
