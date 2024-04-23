<?php

namespace App\Actions\InfoPage;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ObmenVozvratAction extends Controller
{
    public function execute(): View
    {
        $head = [
            'title' => 'Обмен и возврат. My Decor Room - Мебель в Рязани. ',
            'description' => 'Информация для потребителей интернет магазина My Decor Room.',
            'aside' => 'Обмен и возврат'
        ];

        return view('/app-page/info-page/info-box/obmen-i-vozvrat', compact('head'));
    }
}
