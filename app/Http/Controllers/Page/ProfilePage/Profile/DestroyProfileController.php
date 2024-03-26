<?php

namespace App\Http\Controllers\Page\ProfilePage\Profile;

use App\Actions\Profile\ProfileActions\ProfileDestroyAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class DestroyProfileController extends Controller
{
    public function destroyProfile(ProfileDestroyAction $action): JsonResponse
    {
        return $action->execute();
    }

}
