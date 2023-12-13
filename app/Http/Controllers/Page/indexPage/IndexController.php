<?php


namespace App\Http\Controllers\Page\indexPage;


use App\Actions\Index\IndexAction;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function index(IndexAction $action)
    {
        return $action->execute();
    }
}
