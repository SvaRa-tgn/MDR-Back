<?php

namespace App\Actions\Admin\Sliders;

use App\DTO\DTOupdateStatus;
use App\Repositories\Page\AdminPage\Sliders\SlidersRepository;
use Illuminate\Http\JsonResponse;

class UpdateStatusSlidersAction
{
    public $action;

    public function __construct(SlidersRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id): JsonResponse
    {
        $slider = $this->action->updateStatus(DTOupdateStatus::fromUpdateStatusRequest($request), $id);

        return response()->Json(route('setupSlider', $slider->slider));
    }

}
