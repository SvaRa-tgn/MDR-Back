<?php

namespace App\Actions\Admin\Color;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Color\ColorRepository;

class DestroyColorAction extends Controller
{
    public $action;

    public function __construct(ColorRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id)
    {
        $this->action->destroyColor($id);

        return redirect()->route('color.show')->with('success', 'Цвет удален');
    }

}
