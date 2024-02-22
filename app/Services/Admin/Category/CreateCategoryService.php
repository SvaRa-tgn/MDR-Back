<?php

namespace App\Services\Admin\Category;

use App\DTO\DTOcreateCategory;
use App\Models\CategoryImage;
use Illuminate\Support\Facades\Storage;

class CreateCategoryService
{

    public function addImage(DTOcreateCategory $data, $category): void
    {
        $image = New CategoryImage();
        $path = Storage::putFile('public/catalog', $data->image);
        $url = Storage::url($path);
        $image->path = $path;
        $image->link = $url;
        $category->CategoryImage()->save($image);

    }

}
