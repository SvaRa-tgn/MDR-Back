<?php

namespace App\Actions\InfoPage;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class InfoUserAction extends Controller
{
    public function execute(): View
    {

        $head = [
            'title' => 'Информация для покупателей. My Decor Room - Мебель в Рязани. ',
            'description' => 'Информация для потребителей интернет магазина My Decor Room.',
            'aside' => 'Информация для покупателей'
        ];

        return view('/app-page/info-page/info-box/info-dlya-pokupateley', compact('head'));
    }
}
