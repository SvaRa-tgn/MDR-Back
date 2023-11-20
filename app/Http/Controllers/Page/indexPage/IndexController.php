<?php


namespace App\Http\Controllers\Page\indexPage;


use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function index()
    {
        return view('/app-page/index-page/index-page');
    }
}
