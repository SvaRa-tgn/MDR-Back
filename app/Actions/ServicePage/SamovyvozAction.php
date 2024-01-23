<?php

namespace App\Actions\ServicePage;

use App\Http\Controllers\Controller;

class SamovyvozAction extends Controller
{
    public $action;

    public function execute()
    {

        $head = [
            'title' => 'Самовывоз. My Decor Room - Мебель в Рязани. ',
            'description' => 'Услуги для потребителей интернет магазина My Decor Room. ',
            'aside' => 'Самовывоз'
        ];

        return view('/app-page/service-page/service-box/samovyvoz', compact('head'));
    }

}
