<?php

namespace App\Actions\ServicePage;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class SamovyvozAction extends Controller
{
    public function execute(): View
    {
        $head = [
            'title' => 'Самовывоз. My Decor Room - Мебель в Рязани. ',
            'description' => 'Услуги для потребителей интернет магазина My Decor Room. ',
            'aside' => 'Самовывоз'
        ];

        return view('/app-page/service-page/service-box/samovyvoz', compact('head'));
    }
}
