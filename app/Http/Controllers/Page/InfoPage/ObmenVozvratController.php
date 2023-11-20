<?php


namespace App\Http\Controllers\Page\InfoPage;


use App\Http\Controllers\Controller;


class ObmenVozvratController extends Controller
{
    public function index()
    {
        $infoTitle = 'Обмен и возврат';

        return view('/app-page/info-page/info-box/obmen-i-vozvrat', compact('infoTitle'));
    }
}
