<?php

namespace App\Actions\Admin\ModulCollection;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ModulCollection\ModulCollectionRepository;

class EditModulCollectionAction extends Controller
{
    public $action;

    public function __construct(ModulCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($slug_modul_collection)
    {
        $modul_collection = $this->action->editModulCollection($slug_modul_collection);

        $head = [
            'title' => 'Админка - Модульная коллекция '. $modul_collection['name'] . '. MDR',
            'description' => 'Админка - Создание, правки и удаления Модульных коллекций'
        ];

        return view ('/app-page/admin-page/admin-box/modul-collection/edit-modul-collection',
            ['modul_collection' => $modul_collection, 'head' => $head]);
    }

}
