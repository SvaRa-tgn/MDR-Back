<?php

namespace App\Services\Admin\Category;

use App\Http\Controllers\Controller;

class EditCategoryService extends Controller
{

    public function title($category)
    {
        $head = [
            'title' => 'Категория '. $category['name'] .'. Админка MDR',
            'description' => 'Управление Категорией - '. $category['name'] .'. Редактирование и удаление.'
        ];

        return $head;
    }

}
