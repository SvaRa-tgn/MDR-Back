<?php

namespace App\Repositories\Page\AdminPage\Image;

use App\DTO\DTOaddImage;
use App\DTO\DTOcreateModulCompilation;
use App\DTO\DTOcreateProduct;
use App\DTO\DTOupdateImage;
use App\Models\Image;
use App\Models\Product;
use App\Services\Admin\UpdateStroageService;

class ImageRepository
{
    public function addImage(Product $product, string $item, string $status): Image
    {
        $image = new Image();
        $storage = 'public/proverka';
        $result = UpdateStroageService::updateImage($storage, $item);
        $image->link = $result['url'];
        $image->path = $result['path'];
        $image->status = $status;
        $product->image()->save($image);

        return $image;
    }

    public function updateImage(DTOupdateImage $dto, string $id): Image
    {
        $image = Image::find($id);
        UpdateStroageService::deleteImage($image->path);
        $storage = 'public/proverka';
        $result = UpdateStroageService::updateImage($storage, $dto->image);
        $image->link = $result['url'];
        $image->path = $result['path'];
        $image->save();

        return $image;
    }

    public function addSingleImage(DTOaddImage $dto, Product $product): Image
    {
        $images = $product->image;

        if($images->isEmpty()) {
            $status = 'top';
        } else {
            $status = 'stock';
        }

        return $this->addImage($product, $dto->image, $status);
    }

    public function addManyImage(array $array, Product $product): Image
    {
        foreach ($array as $key => $item){
            if($item !== 'null'){
                if($key === 'image_top'){
                    $status = 'top';
                } else {
                    $status = 'stock';
                }
                $image = $this->addImage($product, $item, $status);
            }
        }
        return $image;
    }

    public function imageAddProduct(DTOcreateProduct $dto, Product $product): Image
    {
        return $this->addManyImage($dto->imageArr, $product);
    }

    public function imageAddModul(DTOcreateModulCompilation $dto, Product $product): Image
    {
        return $this->addManyImage($dto->imageArr, $product);
    }

    public function destroyImageSingle(int $id): void
    {
        $image = Image::find($id);
        UpdateStroageService::deleteImage($image->path);
        $image->delete();
    }

    public function destroyManyImage(Product $product): void
    {
        $images = $product->image;

        if(isset($images) && $images !== 'null') {
            foreach ($images as $image){
                UpdateStroageService::deleteImage($image->path);
                $image->delete();
            }
        }
    }
}
