<?php


namespace App\Http\Controllers\Page\ProfilePage\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {

        return redirect()->route('profile.show', ['name'=>str_slug(Auth::user()->name), 'familia'=>str_slug(Auth::user()->familia), 'father'=>str_slug(Auth::user()->father_name)]);
    }

}
