<?php

namespace App\Actions\InfoPage;

use App\Http\Controllers\Controller;

class InfoUserAction extends Controller
{
    public $action;

    public function execute()
    {

        $head = [
            'title' => 'Информация для покупателей. My Decor Room - Мебель в Рязани. ',
            'description' => 'Информация для потребителей интернет магазина My Decor Room.',
            'aside' => 'Информация для покупателей'
        ];

        return view('/app-page/info-page/info-box/info-dlya-pokupateley', compact('head'));
    }

}
