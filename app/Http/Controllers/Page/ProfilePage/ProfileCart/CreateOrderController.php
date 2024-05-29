<?php

namespace App\Http\Controllers\Page\ProfilePage\ProfileCart;

use App\Actions\Profile\ProfileCartActions\CreateOrderAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\CreateOrderRequest;
use Illuminate\Http\JsonResponse;

class CreateOrderController extends Controller
{
    public function createOrder(CreateOrderAction $action, CreateOrderRequest $request): JsonResponse
    {
        return $action->execute($request);
    }

}
