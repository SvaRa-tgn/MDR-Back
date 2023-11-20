<?php


namespace App\Http\Controllers\Page\InfoPage;


use App\Http\Controllers\Controller;


class PersonalnyeDannyeController extends Controller
{
    public function index()
    {
        $infoTitle = 'Персональные данные';

        return view('/app-page/info-page/info-box/personalnye-dannye', compact('infoTitle'));
    }
}
