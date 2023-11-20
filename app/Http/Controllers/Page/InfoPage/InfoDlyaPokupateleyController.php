<?php


namespace App\Http\Controllers\Page\InfoPage;


use App\Http\Controllers\Controller;


class InfoDlyaPokupateleyController extends Controller
{
    public function index()
    {
        $infoTitle = 'Информация для покупателей';

        return view('/app-page/info-page/info-box/info-dlya-pokupateley', compact('infoTitle'));
    }
}
