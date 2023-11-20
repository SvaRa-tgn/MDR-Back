<?php


namespace App\Http\Controllers\Page\ServicePage;


use App\Http\Controllers\Controller;


class SamovyvozController extends Controller
{
    public function index()
    {
        $infoTitle = 'Самовывоз';

        return view('/app-page/service-page/service-box/samovyvoz', compact('infoTitle'));
    }
}
