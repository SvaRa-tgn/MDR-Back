<?php


namespace App\Http\Controllers\Page\ServicePage;


use App\Http\Controllers\Controller;


class OplataController extends Controller
{
    public function index()
    {
        $infoTitle = 'Оплата';

        return view('/app-page/service-page/service-box/oplata', compact('infoTitle'));
    }
}
