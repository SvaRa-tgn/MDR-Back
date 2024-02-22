<?php

namespace App\Services\Admin\Product;

use App\Http\Controllers\Controller;

class UpdateProductService extends Controller
{

    public function title()
    {
        $head = [
            'title' => 'Обновление товара. Админка MDR',
            'description' => 'Админка - Создание, правки и удаления Товаров'
        ];

        return $head;
    }

}
