<?php

namespace App\Actions\Admin\Category;

use App\DTO\DTOcreateCategory;
use App\Http\Requests\AdminPage\Category\CreateCategoryRequest;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use Illuminate\Http\RedirectResponse;

class CreateCategoryAction
{
    public function __construct(private CategoryRepository $repository){}

    public function execute(CreateCategoryRequest $request): RedirectResponse
    {
        $this->repository->createCategory(DTOcreateCategory::fromCreateCategoryRequest($request));

        return redirect()->route('category');
    }

}
