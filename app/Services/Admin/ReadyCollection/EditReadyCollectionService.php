<?php

namespace App\Services\Admin\ReadyCollection;

use App\Http\Controllers\Controller;

class EditReadyCollectionService extends Controller
{

    public function title($ready_collection)
    {
        $head = [
            'title' => 'Готовая коллекция '. $ready_collection['name'] .'. Админка MDR',
            'description' => 'Управление Готовой коллекцией - '. $ready_collection['name'] .'. Редактирование и удаление.'
        ];

        return $head;
    }

}
