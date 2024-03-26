<?php


namespace App\Http\Controllers\Page\ProfilePage\Profile;

use App\Actions\Profile\ProfileActions\ProfileCheckAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Transliterate;

class ProfileCheckController extends Controller
{
    public function profile(ProfileCheckAction $action): RedirectResponse
    {
        return $action->execute();
    }

}
