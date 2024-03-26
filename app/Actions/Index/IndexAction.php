<?php

namespace App\Actions\Index;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\Sliders\SlidersRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Services\Index\IndexService;
use Illuminate\View\View;

class IndexAction
{
    public $action;
    public $service;
    public $category;
    public $sub_category;

    public function __construct(SlidersRepository $action, IndexService $service, CategoryRepository $categories, SubCategoryRepository $sub_category)
    {
        $this->action = $action;
        $this->service = $service;
        $this->categories = $categories;
        $this->sub_category = $sub_category;
    }

    public function execute(): View
    {
        $slider = $this->action->activeSlider();
        $head = $this->service->titlePage();
        $categories = $this->categories->category();
        $sub_categories = $this->sub_category->subCategory();

        return view('/app-page/index-page/index-page', ['slider' => $slider, 'categories' => $categories, 'head' => $head, 'sub_categories' => $sub_categories]);
    }

}
