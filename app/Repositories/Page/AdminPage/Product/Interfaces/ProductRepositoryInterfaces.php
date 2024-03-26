<?php
namespace App\Repositories\Page\AdminPage\Product\Interfaces;

use App\DTO\DTOaddImage;
use App\DTO\DTOaddModul;
use App\DTO\DTOcreateProduct;
use App\DTO\DTOdestroyImage;
use App\DTO\DTOsampleProduct;
use App\DTO\DTOsearchProduct;
use App\DTO\DTOupdateImage;
use App\DTO\DTOupdateProduct;
use App\DTO\DTOupdateStatus;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterfaces
{
    public function sampleProducts(DTOsampleProduct $dto): Collection;

    public function createProduct(DTOcreateProduct $dto): Product;

    public function product($slug_full_name): Product| null;

    public function showImageProduct($slug_full_name): Collection;

    public function updateStatus(DTOupdateStatus $dto, $id): Product;

    public function addImage(DTOaddImage $dto, $id): Product;

    public function updateImage(DTOupdateImage $dto, $id): Product;

    public function destroyImage(DTOdestroyImage $dto, $id): Product;

    public function updateData(DTOupdateProduct $dto, $id): Product;

    public function destroyProduct($id): void;

    public function destroyModulCompilation($id): void;

    public function searchProduct(DTOsearchProduct $dto): array;

    public function searchSetupProduct(DTOsearchProduct $dto, $page): array;

    public function productId(DTOaddModul $dto): Product;

    public function updateModul($productId): Product;
}
