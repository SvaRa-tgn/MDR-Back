<?php


namespace App\Http\Controllers\Page\AdminPage\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        if(Auth::user()->role === 'admin') {
            return redirect()->route('admin.show', ['name'=>str_slug(Auth::user()->name), 'familia'=>str_slug(Auth::user()->familia), 'father'=>str_slug(Auth::user()->father_name)]);
        } else {
            return redirect()->route('profile.show', ['name'=>str_slug(Auth::user()->name), 'familia'=>str_slug(Auth::user()->familia), 'father'=>str_slug(Auth::user()->father_name)]);
        }

    }

}
