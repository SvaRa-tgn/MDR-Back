<?php

namespace App\Services\Admin\Product;

class AllProductsService
{

    public function title($page)
    {
        if($page === 'v_prodazhe'){
            $title = 'Товары в продаже. Админка MDR';
        } else if ($page === 'rezerved') {
            $title = 'Товары в резерве. Админка MDR';
        } else if ($page === 'dont_display') {
            $title = 'Товары не отображенные. Админка MDR';
        } else {
            $title = 'Все товары. Админка MDR';
        }

        return [
            'title' => $title,
            'description' => 'Админка - Создание, правки и удаления Товаров'
        ];
    }

}
