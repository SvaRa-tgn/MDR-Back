<?php

namespace App\Actions\Admin\Category;

use App\DTO\DTOcreateCategory;
use App\Http\Requests\AdminPage\Category\CreateCategoryRequest;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Services\Admin\UpdateStroageService;
use Illuminate\Http\RedirectResponse;

class CreateCategoryAction
{
    private string $storage = 'public/catalog';

    public function __construct(private CategoryRepository $repository){}

    public function execute(CreateCategoryRequest $request): RedirectResponse
    {
        $dto = DTOcreateCategory::fromCreateCategoryRequest($request);

        $this->repository->createCategory($dto, UpdateStroageService::updateImage($this->storage, $dto->image));

        return redirect()->route('category');
    }

}
