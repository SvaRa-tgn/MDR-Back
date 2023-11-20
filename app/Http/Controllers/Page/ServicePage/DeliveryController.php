<?php


namespace App\Http\Controllers\Page\ServicePage;


use App\Http\Controllers\Controller;


class DeliveryController extends Controller
{
    public function index()
    {
        $infoTitle = 'Доставка';

        return view('/app-page/service-page/service-box/delivery', compact('infoTitle'));
    }
}
