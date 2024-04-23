<?php

namespace App\Actions\Profile\ProfileActions;

use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\Http\JsonResponse;

class ProfileDestroyAction
{
    public function __construct(private ProfileRepository $profile){}

    public function execute(): JsonResponse
    {
        $this->profile->destroyProfile($this->profile->profile());

        return response()->json(route('/.index'));
    }

}
