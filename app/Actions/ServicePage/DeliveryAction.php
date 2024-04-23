<?php

namespace App\Actions\ServicePage;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DeliveryAction extends Controller
{
    public function execute(): View
    {
        $head = [
            'title' => 'Доставка. My Decor Room - Мебель в Рязани. ',
            'description' => 'Услуги для потребителей интернет магазина My Decor Room. ',
            'aside' => 'Доставка'
        ];

        return view('/app-page/service-page/service-box/delivery', compact('head'));
    }
}
