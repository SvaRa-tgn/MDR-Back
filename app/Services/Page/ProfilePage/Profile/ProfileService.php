<?php


namespace App\Services\Page\ProfilePage\Profile;

use App\Http\Controllers\Controller;
use App\Repository\Page\ProfilePage\Profile\ProfileRepository;

class ProfileService extends Controller
{
    public $service;

    public function __construct(ProfileRepository $service)
    {
        $this->service = $service;
    }
}
