<?php


namespace App\Http\Controllers\Page\InfoPage;


use App\Http\Controllers\Controller;


class KakOformitZakazController extends Controller
{
    public function index()
    {
        $infoTitle = 'Как оформить заказ';

        return view('/app-page/info-page/info-box/kak-oformit-zakaz', compact('infoTitle'));
    }
}
