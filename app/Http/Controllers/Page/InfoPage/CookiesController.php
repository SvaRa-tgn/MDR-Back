<?php


namespace App\Http\Controllers\Page\InfoPage;


use App\Http\Controllers\Controller;


class CookiesController extends Controller
{
    public function index()
    {
        $infoTitle = 'Cookies';

        return view('/app-page/info-page/info-box/cookies', compact('infoTitle'));
    }
}
