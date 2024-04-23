<?php

namespace App\Actions\ServicePage;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class SborkaAction extends Controller
{
    public function execute(): View
    {
        $head = [
            'title' => 'Сборка. My Decor Room - Мебель в Рязани. ',
            'description' => 'Услуги для потребителей интернет магазина My Decor Room. ',
            'aside' => 'Сборка'
        ];

        return view('/app-page/service-page/service-box/sborka', compact('head'));
    }
}
