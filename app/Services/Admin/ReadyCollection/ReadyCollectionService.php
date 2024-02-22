<?php

namespace App\Services\Admin\ReadyCollection;

use App\Http\Controllers\Controller;

class ReadyCollectionService extends Controller
{

    public function title()
    {
        $head = [
            'title' => 'Управление Готовыми Коллекциями - Админка MDR',
            'description' => 'Админка - Управление Готовыми Коллекциями сайта My Decor Room'
        ];

        return $head;
    }

}
