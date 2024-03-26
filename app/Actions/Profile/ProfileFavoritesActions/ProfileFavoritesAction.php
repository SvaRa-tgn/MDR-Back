<?php

namespace App\Actions\Profile\ProfileFavoritesActions;

use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use App\Services\Profile\ProfileService;
use Illuminate\View\View;

class ProfileFavoritesAction
{
    public $action;
    public $service;

    public function __construct(ProfileRepository $action, ProfileService $service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute(): View
    {
        return view ('/app-page/profile-page/profile-box/profile-favorites');
    }

}
