<?php


namespace App\Http\Controllers\Page\AdminPage\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Transliterate;

class IndexController extends Controller
{
    public function index()
    {
        if(Auth::user()->role === 'admin') {
            return redirect()->route('admin.show', ['name'=>Transliterate::slugify(Auth::user()->name),
                'familia'=>Transliterate::slugify(Auth::user()->familia),
                'father'=>Transliterate::slugify(Auth::user()->father_name)]);
        } else {
            return redirect()->route('profile.show', ['name'=>Transliterate::slugify(Auth::user()->name),
                'familia'=>Transliterate::slugify(Auth::user()->familia),
                'father'=>Transliterate::slugify(Auth::user()->father_name)]);
        }

    }

}
