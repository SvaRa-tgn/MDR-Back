<?php

namespace App\Actions\Admin\Color;

use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Services\Admin\Color\ColorService;
use Illuminate\View\View;

class ColorAction
{
    public function __construct(private ColorRepository $colorRepository, private ColorService $service){}

    public function execute(): View
    {
        $colors = $this->colorRepository->color();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/color/color', ['colors' => $colors, 'head' => $head]);
    }

}
