<?php


namespace App\Http\Controllers\Page\ProfilePage\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Transliterate;

class IndexController extends Controller
{
    public function index()
    {
        return redirect()->route('profile.user',
            ['name'=>Auth::user()->slug_name,
                'familia'=>Auth::user()->slug_familia,
                'father'=>Auth::user()->slug_father_name]);
    }

}
