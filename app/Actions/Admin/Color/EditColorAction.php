<?php

namespace App\Actions\Admin\Color;

use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Services\Admin\Color\EditColorService;
use Illuminate\View\View;

class EditColorAction
{
    public function __construct(private ColorRepository $colorRepository, private EditColorService $service){}

    public function execute(string $slugColor): View
    {
        $color = $this->colorRepository->editColor($slugColor);

        $head = $this->service->editTitle($color->color);

        return view ('/app-page/admin-page/admin-box/color/edit-color', ['color' => $color, 'head' => $head]);
    }
}
