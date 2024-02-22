<?php

namespace App\Services\Admin\ModulCollection;

use App\Http\Controllers\Controller;

class ModulCollectionService extends Controller
{

    public function title()
    {
        $head = [
            'title' => 'Управление Модульными Коллекциями - Админка MDR',
            'description' => 'Админка - Управление Модульными Коллекциями сайта My Decor Room'
        ];

        return $head;
    }

}
