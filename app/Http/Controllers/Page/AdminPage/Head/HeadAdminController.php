<?php

namespace App\Http\Controllers\Page\AdminPage\Head;

use App\Actions\Admin\Head\HeadAdminAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Transliterate;

class HeadAdminController extends Controller
{
    public function adminka(HeadAdminAction $action): View
    {
        return $action->execute();
    }

}
