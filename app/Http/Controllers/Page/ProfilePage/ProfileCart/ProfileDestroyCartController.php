<?php

namespace App\Http\Controllers\Page\ProfilePage\ProfileCart;

use App\Actions\Profile\ProfileCartActions\ProfileDestroyCartAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ProfileDestroyCartController extends Controller
{
    public function destroyCart(ProfileDestroyCartAction $action, int $id): JsonResponse
    {
        return $action->execute($id);
    }

}
