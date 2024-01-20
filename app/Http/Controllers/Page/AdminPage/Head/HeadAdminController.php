<?php


namespace App\Http\Controllers\Page\AdminPage\Head;

use App\Actions\Admin\Head\HeadAdminAction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Transliterate;

class HeadAdminController extends Controller
{
    public function index(HeadAdminAction $action)
    {
        if(Auth::user()->role === 'admin') {
            return $action->execute();
        } else {
            return redirect()->route('profile.show', ['name'=>Transliterate::slugify(Auth::user()->name),
                'familia'=>Transliterate::slugify(Auth::user()->familia),
                'father'=>Transliterate::slugify(Auth::user()->father_name)]);
        }

    }

}
