<?php


namespace App\Http\Controllers\Page\ServicePage;


use App\Http\Controllers\Controller;


class ServiceMainController extends Controller
{
    public function index()
    {
        return view('/app-page/service-page/service-box/service-main');
    }
}
