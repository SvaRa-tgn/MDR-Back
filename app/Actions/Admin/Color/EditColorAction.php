<?php

namespace App\Actions\Admin\Color;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Color\ColorRepository;

class EditColorAction extends Controller
{
    public $action;

    public function __construct(ColorRepository $action)

    {
        $this->action = $action;
    }

    public function execute($slug_color)
    {
        $color = $this->action->editColor($slug_color);

        $head = [
            'title' => 'Админка - Цвет '. $color['name'] . '. MDR',
            'description' => 'Админка - Создание, правки и удаления Категорий'
        ];

        return view ('/app-page/admin-page/admin-box/color/edit-color', ['color' => $color, 'head' => $head]);
    }

}
