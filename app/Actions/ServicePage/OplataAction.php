<?php

namespace App\Actions\ServicePage;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class OplataAction extends Controller
{
    public function execute(): View
    {
        $head = [
            'title' => 'Оплата. My Decor Room - Мебель в Рязани. ',
            'description' => 'Услуги для потребителей интернет магазина My Decor Room. ',
            'aside' => 'Оплата'
        ];

        return view('/app-page/service-page/service-box/oplata', compact('head'));
    }
}
