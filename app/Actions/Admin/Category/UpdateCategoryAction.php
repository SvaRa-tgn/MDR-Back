<?php

namespace App\Actions\Admin\Category;

use App\DTO\DTOupdateCategory;
use App\Http\Requests\AdminPage\Category\UpdateCategoryRequest;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Services\Admin\UpdateStroageService;
use Illuminate\Http\JsonResponse;

class UpdateCategoryAction
{
    private string $storage = 'public/proverka';

    public function __construct(private CategoryRepository $repository){}

    public function execute(UpdateCategoryRequest $request, int $id): JsonResponse
    {
        $dto = DTOupdateCategory::fromUpdateCategoryRequest($request);

        $image = UpdateStroageService::updateImage($this->storage, $dto->image);

        UpdateStroageService::deleteImage(CategoryRepository::categoryFind($id)->path);

        $category = $this->repository->updateCategory(CategoryRepository::categoryFind($id), $dto, $image);

        return response()->json(route('editCategory', $category->slug_category));
    }

}
