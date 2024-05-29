<?php

namespace App\Http\Controllers\Page\ProfilePage\ProfileCart;

use App\Actions\Profile\ProfileCartActions\ProfileDestroyAllCartAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ProfileDestroyAllCartController extends Controller
{
    public function destroyAllCart(ProfileDestroyAllCartAction $action): JsonResponse
    {
        return $action->execute();
    }

}
