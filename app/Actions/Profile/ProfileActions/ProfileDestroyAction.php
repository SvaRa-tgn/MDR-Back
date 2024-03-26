<?php

namespace App\Actions\Profile\ProfileActions;

use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\Http\JsonResponse;

class ProfileDestroyAction
{
    public $action;

    public function __construct(ProfileRepository $action)
    {
        $this->action = $action;
    }

    public function execute(): JsonResponse
    {
        $this->action->destroyProfile();

        return response()->json(route('/.index'));
    }

}
