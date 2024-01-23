<?php

namespace App\Actions\InfoPage;

use App\Http\Controllers\Controller;

class PersonalDataAction extends Controller
{
    public $action;

    public function execute()
    {

        $head = [
            'title' => 'Персональные данные. My Decor Room - Мебель в Рязани. ',
            'description' => 'Информация для потребителей интернет магазина My Decor Room.',
            'aside' => 'Персональные данные'
        ];

        return view('/app-page/info-page/info-box/personalnye-dannye', compact('head'));
    }

}
