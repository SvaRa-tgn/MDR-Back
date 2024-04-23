<?php

namespace App\Actions\Admin\SubCategory;

use App\DTO\DTOcreateSubCategory;
use App\Http\Requests\AdminPage\SubCategory\SubCategoryCreateRequest;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use Illuminate\Http\RedirectResponse;

class CreateSubCategoryAction
{
    public function __construct(private SubCategoryRepository $repository){}

    public function execute(SubCategoryCreateRequest $request): RedirectResponse
    {
        $this->repository->createSubCategory(DTOcreateSubCategory::fromCreateSubCategoryRequest($request));

        return redirect()->route('subCategory');
    }
}
