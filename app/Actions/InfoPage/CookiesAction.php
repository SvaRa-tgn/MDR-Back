<?php

namespace App\Actions\InfoPage;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CookiesAction extends Controller
{
    public function execute(): View
    {
        $head = [
            'title' => 'Cookies. My Decor Room - Мебель в Рязани. ',
            'description' => 'Информация для потребителей интернет магазина My Decor Room.',
            'aside' => 'cookies'
        ];

        return view('/app-page/info-page/info-box/cookies', compact('head'));
    }
}
