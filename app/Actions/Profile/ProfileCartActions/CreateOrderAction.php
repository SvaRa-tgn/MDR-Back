<?php

namespace App\Actions\Profile\ProfileCartActions;

use App\DTO\DTOcreateOrder;
use App\Http\Requests\AdminPage\Product\CreateOrderRequest;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class CreateOrderAction
{
    public function __construct(private ProfileRepository $profile){}

    public function execute(CreateOrderRequest $request): JsonResponse
    {
        $user = $this->profile->profile();

        Cache::set('order:'.$user->id, DTOcreateOrder::fromCreateOrderRequest($request)->products);

        return response()->json(route('checkoutOrder'));
    }

}
