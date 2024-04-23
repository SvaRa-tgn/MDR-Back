<?php

namespace App\Services\Admin;

use App\DTO\DTOcreateModulCompilation;
use App\Models\Product;
use App\Repositories\Page\AdminPage\ModulCompilation\ModulCompilationRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Database\Eloquent\Model;

class ModulService
{
    public function __construct(private ProductRepository $repository, private ModulCompilationRepository $modulCompilationRepository){}

    public function addManyModuls(DTOcreateModulCompilation $dto, Product $product)
    {
        foreach ($dto->modul_items as $name){
            $modul = ProductRepository::productFindName($name);

            $this->repository->productAddModul($product, $modul);

            $this->modulCompilationRepository->addModul($modul, $product->id);
        }
    }
}
