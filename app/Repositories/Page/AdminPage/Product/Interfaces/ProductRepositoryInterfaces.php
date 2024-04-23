<?php
namespace App\Repositories\Page\AdminPage\Product\Interfaces;

use App\DTO\DTOaddImage;
use App\DTO\DTOaddModul;
use App\DTO\DTOcreateModulCompilation;
use App\DTO\DTOcreateProduct;
use App\DTO\DTOdestroyImage;
use App\DTO\DTOsampleProduct;
use App\DTO\DTOsearchProduct;
use App\DTO\DTOupdateImage;
use App\DTO\DTOupdateProduct;
use App\DTO\DTOupdateStatus;
use App\Models\ItemCollection;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterfaces
{
    public static function productFind(int $id): Product;

    public static function productFindName (string $name): Product;

    public function productFindItemCollection(int $id): Collection;

    public function sampleProducts(SubCategory $subCategory): Collection;

    public function createProduct(DTOcreateProduct $dto, ItemCollection $collection): Product;

    public function createCompilation(DTOcreateModulCompilation $dto, ItemCollection $collection): Product;

    public function productAddModul(Product $product, Product $modul): Product;

    public function product(string $slugFullName): Product;

    public function subCategoryProduct(int $id): Collection;

    public function showImageProduct(Product $product): Collection;

    public function updateStatus(DTOupdateStatus $dto, Product $product): Product;

    public function destroyImage(DTOdestroyImage $dto, $id): Product;

    public function updateData(DTOupdateProduct $dto, Product $product): Product;

    public function productNoColor(int $id, int $noColor): Collection;

    public function destroyProduct(Product $product): void;

    public function searchProduct(DTOsearchProduct $dto): array;

    public function searchSetupProduct(DTOsearchProduct $dto, string $page): array;

    public function productsClass(string $page): array;

    public function sampleModul(int $id): array;

    public function updateModul(Product $product, Collection $moduls): Product;

    public function broColors(int $id, string $type): Collection;

    public function broProducts(Product $product): Collection;

    public function allModuls(int $id): Collection;

    public function recomendationProducts(Product $product): Collection;
}
