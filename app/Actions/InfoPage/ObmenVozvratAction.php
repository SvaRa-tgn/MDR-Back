<?php

namespace App\Actions\InfoPage;

use App\Http\Controllers\Controller;

class ObmenVozvratAction extends Controller
{
    public $action;

    public function execute()
    {

        $head = [
            'title' => 'Обмен и возврат. My Decor Room - Мебель в Рязани. ',
            'description' => 'Информация для потребителей интернет магазина My Decor Room.',
            'aside' => 'Обмен и возврат'
        ];

        return view('/app-page/info-page/info-box/obmen-i-vozvrat', compact('head'));
    }

}
