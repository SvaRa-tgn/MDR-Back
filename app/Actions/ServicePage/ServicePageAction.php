<?php

namespace App\Actions\ServicePage;

use App\Http\Controllers\Controller;

class ServicePageAction extends Controller
{
    public $action;

    public function execute()
    {

        $head = [
            'title' => 'Услуги. My Decor Room - Мебель в Рязани. ',
            'description' => 'Услуги для потребителей интернет магазина My Decor Room. '
        ];

        return view('/app-page/service-page/service-box/service-main', compact('head'));
    }

}
