<?php

namespace App\Actions\InfoPage;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PersonalDataAction extends Controller
{
    public function execute(): View
    {
        $head = [
            'title' => 'Персональные данные. My Decor Room - Мебель в Рязани. ',
            'description' => 'Информация для потребителей интернет магазина My Decor Room.',
            'aside' => 'Персональные данные'
        ];

        return view('/app-page/info-page/info-box/personalnye-dannye', compact('head'));
    }
}
