<?php

namespace App\Actions\InfoPage;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HowDesignOrderAction extends Controller
{
    public function execute(): View
    {
        $head = [
            'title' => 'Как оформить заказ. My Decor Room - Мебель в Рязани. ',
            'description' => 'Информация для потребителей интернет магазина My Decor Room.',
            'aside' => 'Как оформить заказ'
        ];

        return view('/app-page/info-page/info-box/kak-oformit-zakaz', compact('head'));
    }
}
