<?php

namespace App\Services\Admin\Product;

use App\Http\Controllers\Controller;

class SetupProductsService extends Controller
{

    public function title()
    {
        $head = [
            'title' => 'Управление товарами. Админка MDR',
            'description' => 'Админка - Создание, правки и удаления Товаров'
        ];

        return $head;
    }

}
