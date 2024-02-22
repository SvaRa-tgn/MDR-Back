<?php

namespace App\Services\Admin\SubCategory;

use App\Http\Controllers\Controller;

class EditSubCategoryService extends Controller
{

    public function title($subCategory)
    {
        $head = [
            'title' => 'Подкатегория '. $subCategory['sub_category'] .'. Админка MDR',
            'description' => 'Управление Категорией - '. $subCategory['sub_category'] .'. Редактирование и удаление.'
        ];

        return $head;
    }

}
