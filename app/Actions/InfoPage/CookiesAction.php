<?php

namespace App\Actions\InfoPage;

use App\Http\Controllers\Controller;

class CookiesAction extends Controller
{
    public $action;

    public function execute()
    {

        $head = [
            'title' => 'Cookies. My Decor Room - Мебель в Рязани. ',
            'description' => 'Информация для потребителей интернет магазина My Decor Room.',
            'aside' => 'cookies'
        ];

        return view('/app-page/info-page/info-box/cookies', compact('head'));
    }

}
