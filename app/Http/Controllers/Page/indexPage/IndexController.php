<?php

namespace App\Http\Controllers\Page\indexPage;

use App\Actions\Index\IndexAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(IndexAction $action): View
    {
        return $action->execute();
    }
}
