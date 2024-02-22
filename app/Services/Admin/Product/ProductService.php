<?php

namespace App\Services\Admin\Product;

use App\Http\Controllers\Controller;

class ProductService extends Controller
{

    public function title()
    {
        $head = [
            'title' => 'Создание Товара. Админка MDR',
            'description' => 'Админка - Создание, правки и удаления Товаров'
        ];

        return $head;
    }

}
