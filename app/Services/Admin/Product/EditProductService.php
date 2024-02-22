<?php

namespace App\Services\Admin\Product;

use App\Http\Controllers\Controller;

class EditProductService extends Controller
{

    public function title()
    {
        $head = [
            'title' => 'Поиск товара. Админка MDR',
            'description' => 'Админка - Создание, правки и удаления Товаров'
        ];

        return $head;
    }

}
