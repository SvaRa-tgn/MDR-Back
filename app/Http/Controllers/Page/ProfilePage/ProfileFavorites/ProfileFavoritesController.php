<?php

namespace App\Http\Controllers\Page\ProfilePage\ProfileFavorites;

use App\Actions\Profile\ProfileFavoritesActions\ProfileFavoritesAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ProfileFavoritesController extends Controller
{
    public function profileFavoritesItems(ProfileFavoritesAction $action): View
    {
        return $action->execute();
    }

}
