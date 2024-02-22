<?php

namespace App\Services\Admin\ModulCollection;

use App\Http\Controllers\Controller;

class EditModulCollectionService extends Controller
{

    public function title($modul_collection)
    {
        $head = [
            'title' => 'Модульная коллекция '. $modul_collection['name'] .'. Админка MDR',
            'description' => 'Управление Модульной коллекцией - '. $modul_collection['name'] .'. Редактирование и удаление.'
        ];

        return $head;
    }

}
