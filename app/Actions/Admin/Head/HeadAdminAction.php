<?php

namespace App\Actions\Admin\Head;

use App\Http\Controllers\Controller;

class HeadAdminAction extends Controller
{
    public $action;

    public function execute()
    {

        $head = [
            'title' => 'Админка MDR',
            'description' => 'Лучшая мебель на любой вкус по низким ценам в Рязани. Интернет-магазин My Decor Room'
        ];

        return view('/app-page/admin-page/admin-box/head/head-admin', ['head' => $head]);
    }

}
