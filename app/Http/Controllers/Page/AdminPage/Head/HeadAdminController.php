<?php


namespace App\Http\Controllers\Page\AdminPage\Head;

use App\Actions\Admin\Head\HeadAdminAction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Transliterate;

class HeadAdminController extends Controller
{
    public function adminka(HeadAdminAction $action)
    {
        return $action->execute();
    }

}
