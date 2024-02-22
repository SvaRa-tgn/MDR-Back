<?php

namespace App\Services\Admin\Color;

use App\Http\Controllers\Controller;

class ColorService extends Controller
{

    public function title()
    {
        $head = [
            'title' => 'Управление Цветом товаров - Админка MDR',
            'description' => 'Админка - Управление Цветом товаров сайта My Decor Room'
        ];

        return $head;
    }

}
