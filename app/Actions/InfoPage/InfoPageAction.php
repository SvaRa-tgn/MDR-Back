<?php

namespace App\Actions\InfoPage;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;

class InfoPageAction extends Controller
{
    public $action;

    public function execute()
    {

        $head = [
            'title' => 'Информация. My Decor Room - Мебель в Рязани. ',
            'description' => 'Информация для потребителей интернет магазина My Decor Room. '
        ];

        return view('/app-page/info-page/info-box/info-main', compact('head'));
    }

}
