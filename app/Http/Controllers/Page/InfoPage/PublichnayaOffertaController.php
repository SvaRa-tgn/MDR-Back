<?php


namespace App\Http\Controllers\Page\InfoPage;


use App\Http\Controllers\Controller;


class PublichnayaOffertaController extends Controller
{
    public function index()
    {
        $infoTitle = 'Публичная офферта';

        return view('/app-page/info-page/info-box/publichnaya-offerta', compact('infoTitle'));
    }
}
