<?php

namespace App\Services\Admin;

use JetBrains\PhpStorm\ArrayShape;

class SeoService
{
    const TITLE = '';
    const DESC = '';

    #[ArrayShape(['title' => "string", 'description' => "string"])]
    public function title(): array
    {
        return ['title' => static::TITLE.'. Админка MDR',
            'description' => static::DESC];
    }

    #[ArrayShape(['title' => "string", 'description' => "string"])]
    public function editTitle($name): array
    {
        return ['title' => static::TITLE. $name .'. Админка MDR',
            'description' => static::DESC. $name .'. Редактирование и удаление.'];
    }

}
