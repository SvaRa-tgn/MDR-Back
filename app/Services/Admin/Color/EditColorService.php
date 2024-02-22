<?php

namespace App\Services\Admin\Color;

use App\Http\Controllers\Controller;

class EditColorService extends Controller
{

    public function title($color)
    {
        $head = [
            'title' => 'Цвет товара '. $color['name'] .'. Админка MDR',
            'description' => 'Управление Цветом товара - '. $color['name'] .'. Редактирование и удаление.'
        ];

        return $head;
    }

}
