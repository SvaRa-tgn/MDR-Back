<?php

namespace App\Actions\InfoPage;

use App\Http\Controllers\Controller;

class PublicOffertaAction extends Controller
{
    public $action;

    public function execute()
    {

        $head = [
            'title' => 'Публичная оферта. My Decor Room - Мебель в Рязани. ',
            'description' => 'Информация для потребителей интернет магазина My Decor Room.',
            'aside' => 'Публичная оферта'
        ];

        return view('/app-page/info-page/info-box/publichnaya-offerta', compact('head'));
    }

}
