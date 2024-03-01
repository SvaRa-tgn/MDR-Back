<?php

namespace App\Actions\Admin\Color;

use App\DTO\DTOcreateColor;
use App\Repositories\Page\AdminPage\Color\ColorRepository;
use Illuminate\Http\RedirectResponse;

class CreateColorAction
{
    public $action;

    public function __construct(ColorRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request): RedirectResponse
    {
        $this->action->createColor(DTOcreateColor::fromCreateColorRequest($request));

        return redirect()->route('color');
    }

}
