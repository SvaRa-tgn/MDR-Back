<?php

namespace App\Actions\InfoPage;

use App\Http\Controllers\Controller;

class HowDesignOrderAction extends Controller
{
    public $action;

    public function execute()
    {

        $head = [
            'title' => 'Как оформить заказ. My Decor Room - Мебель в Рязани. ',
            'description' => 'Информация для потребителей интернет магазина My Decor Room.',
            'aside' => 'Как оформить заказ'
        ];

        return view('/app-page/info-page/info-box/kak-oformit-zakaz', compact('head'));
    }

}
