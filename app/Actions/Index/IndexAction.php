<?php

namespace App\Actions\Index;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\Sliders\SlidersRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Services\Index\IndexService;
use Illuminate\View\View;

class IndexAction
{
    public function __construct(private SlidersRepository $slider, private IndexService $service,
                                private CategoryRepository $categories, private SubCategoryRepository $subCategory){}

    public function execute(): View
    {
        $slider = $this->slider->activeSlider();
        $head = $this->service->titlePage();
        $categories = $this->categories->category();
        $sub_categories = $this->subCategory->subCategory();

        return view('/app-page/index-page/index-page', ['slider' => $slider, 'categories' => $categories, 'head' => $head,
            'sub_categories' => $sub_categories]);
    }

}
