<?php


namespace App\Http\Controllers\Page\ServicePage;


use App\Http\Controllers\Controller;


class SborkaController extends Controller
{
    public function index()
    {
        $infoTitle = 'Сборка';

        return view('/app-page/service-page/service-box/sborka', compact('infoTitle'));
    }
}
