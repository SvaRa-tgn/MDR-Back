<?php

namespace App\Actions\Admin\Category;

use App\Models\Category;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Services\Admin\Category\CategoryService;
use Illuminate\View\View;

class CategoryAction
{
    public function __construct(private CategoryRepository $repository, private CategoryService $service){}

    public function execute(): View
    {
        $categories = $this->repository->category();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/category/category', ['categories' => $categories, 'head' => $head]);
    }

}
