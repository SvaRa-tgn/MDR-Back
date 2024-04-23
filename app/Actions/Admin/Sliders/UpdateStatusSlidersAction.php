<?php

namespace App\Actions\Admin\Sliders;

use App\DTO\DTOupdateStatus;
use App\Http\Requests\AdminPage\Product\UpdateStatusRequest;
use App\Repositories\Page\AdminPage\Sliders\SlidersRepository;
use Illuminate\Http\JsonResponse;

class UpdateStatusSlidersAction
{
    public function __construct(private SlidersRepository $repositoryn){}

    public function execute(UpdateStatusRequest $request, int $id): JsonResponse
    {
        $slider = $this->repositoryn->updateStatus(DTOupdateStatus::fromUpdateStatusRequest($request), $id);

        return response()->Json(route('setupSlider', $slider->slider));
    }

}
