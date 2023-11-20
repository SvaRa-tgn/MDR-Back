<?php


namespace App\Http\Controllers\Page\InfoPage;


use App\Http\Controllers\Controller;


class InfoMainController extends Controller
{
    public function index()
    {
        return view('/app-page/info-page/info-box/info-main');
    }
}
