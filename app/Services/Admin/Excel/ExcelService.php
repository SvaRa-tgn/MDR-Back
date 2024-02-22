<?php

namespace App\Services\Admin\Excel;

use App\Http\Controllers\Controller;

class ExcelService extends Controller
{

    public function title()
    {
        $head = [
            'title' => 'Загрузка Excel. Админка - MDR',
            'description' => 'Загрузка файлов Excel. Интернет-магазин My Decor Room'
        ];

        return $head;
    }

}
