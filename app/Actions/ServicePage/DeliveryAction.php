<?php

namespace App\Actions\ServicePage;

use App\Http\Controllers\Controller;

class DeliveryAction extends Controller
{
    public $action;

    public function execute()
    {

        $head = [
            'title' => 'Доставка. My Decor Room - Мебель в Рязани. ',
            'description' => 'Услуги для потребителей интернет магазина My Decor Room. ',
            'aside' => 'Доставка'
        ];

        return view('/app-page/service-page/service-box/delivery', compact('head'));
    }

}
