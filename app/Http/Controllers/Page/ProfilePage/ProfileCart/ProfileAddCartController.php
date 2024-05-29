<?php

namespace App\Http\Controllers\Page\ProfilePage\ProfileCart;

use App\Actions\Profile\ProfileCartActions\ProfileAddCartAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfilePage\Profile\AddCartRequest;
use Illuminate\Http\JsonResponse;

class ProfileAddCartController extends Controller
{
    public function addCart(ProfileAddCartAction $action, AddCartRequest $request): JsonResponse
    {
        return $action->execute($request);
    }

}
