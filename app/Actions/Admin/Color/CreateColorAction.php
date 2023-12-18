<?php

namespace App\Actions\Admin\Color;

use App\DTO\DTOcreateColor;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Color\ColorRepository;

class CreateColorAction extends Controller
{
    public $action;

    public function __construct(ColorRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request)
    {
        $this->action->createColor(DTOcreateColor::fromCreateColorRequest($request));

        return redirect()->route('color.show')->with('success', 'Цвет создан');
    }

}
