<?php

namespace App\Services\Admin;

use App\Models\Product;
use App\Repositories\Page\AdminPage\Image\ImageRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use Illuminate\Database\Eloquent\Collection;

class DestroyService
{
    public function __construct(private ImageRepository $image, private SubCategoryRepository $subCategoryRepository,
                                private ProductRepository $productRepository){}

    public function destroyManyProducts(Collection $products): void
    {
        foreach ($products as $product) {
            $this->image->destroyManyImage($product);
        }

        foreach ($products as $product) {
            $this->productRepository->destroyProduct($product);
        }
    }

    public function destroyProduct(Product $product): void
    {
        $this->image->destroyManyImage($product);

        $this->productRepository->destroyProduct($product);
    }

    public function destroyManySubCategories(Collection $subCategories): void
    {
        foreach ($subCategories as $subCategory) {
            $this->subCategoryRepository->destroy($subCategory->id);
        }
    }
}
