<?php

namespace App\Services\Admin\Head;

use App\Http\Controllers\Controller;

class HeadAdminService extends Controller
{

    public function title()
    {
        $head = [
            'title' => 'Управление сайтом. Админка - MDR',
            'description' => 'Лучшая мебель на любой вкус по низким ценам в Рязани. Интернет-магазин My Decor Room'
        ];

        return $head;
    }

}
