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
            ['name'=>Transliterate::slugify(Auth::user()->name),
                'familia'=>Transliterate::slugify(Auth::user()->familia),
                'father'=>Transliterate::slugify(Auth::user()->father_name)]);
    }

}
