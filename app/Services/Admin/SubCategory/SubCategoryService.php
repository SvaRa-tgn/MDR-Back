<?php

namespace App\Services\Admin\SubCategory;

use App\Http\Controllers\Controller;

class SubCategoryService extends Controller
{

    public function title()
    {
        $head = [
            'title' => 'Управление Подкатегорями - Админка MDR',
            'description' => 'Админка - Управление подкатегориями сайта My Decor Room'
        ];

        return $head;
    }

}
