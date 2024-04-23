<?php

namespace App\Actions\ServicePage;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ServicePageAction extends Controller
{
    public function execute(): View
    {
        $head = [
            'title' => 'Услуги. My Decor Room - Мебель в Рязани. ',
            'description' => 'Услуги для потребителей интернет магазина My Decor Room. '
        ];

        return view('/app-page/service-page/service-box/service-main', compact('head'));
    }
}
