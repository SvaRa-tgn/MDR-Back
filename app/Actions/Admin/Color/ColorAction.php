<?php

namespace App\Actions\Admin\Color;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Color\ColorRepository;

class ColorAction extends Controller
{
    public $action;

    private ColorRepository $colorRepository;

    public function __construct(ColorRepository $action, ColorRepository $colorRepository)
    {
        $this->action = $action;
        $this->colorRepository = $colorRepository;
    }

    public function execute()
    {
        $colors = $this->colorRepository->showColor();

        $head = [
            'title' => 'Админка - Цвет для мебели. MDR',
            'description' => 'Админка - Создание, правки и удаления Категорий'
        ];

        return view ('/app-page/admin-page/admin-box/color/color', compact('colors'));
    }

}
