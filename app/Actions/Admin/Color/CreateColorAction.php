<?php

namespace App\Actions\Admin\Color;

use App\DTO\DTOcreateColor;
use App\Http\Requests\AdminPage\Color\CreateColorRequest;
use App\Repositories\Page\AdminPage\Color\ColorRepository;
use Illuminate\Http\RedirectResponse;

class CreateColorAction
{
    public function __construct(private ColorRepository $colorRepository){}

    public function execute(CreateColorRequest $request): RedirectResponse
    {
        $this->colorRepository->createColor(DTOcreateColor::fromCreateColorRequest($request));

        return redirect()->route('color');
    }

}
