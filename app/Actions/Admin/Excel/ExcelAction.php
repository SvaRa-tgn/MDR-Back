<?php

namespace App\Actions\Admin\Excel;

use App\Http\Controllers\Controller;

class ExcelAction extends Controller
{
    public $action;

    public function execute()
    {

        $head = [
            'title' => 'Загрузка Excel - Админка. MDR',
            'description' => 'Админка - Загрузка файла Excel'
        ];

        return view ('/app-page/admin-page/admin-box/excel/excel', compact('head'));
    }

}
