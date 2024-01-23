<?php

namespace App\Actions\Admin\ModulCollection;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ModulCollection\ModulCollectionRepository;

class ModulCollectionAction extends Controller
{
    public $action;

    private ModulCollectionRepository $modulCollectionRepository;

    public function __construct(ModulCollectionRepository $action, ModulCollectionRepository $modulCollectionRepository)
    {
        $this->action = $action;
        $this->modulCollectionRepository = $modulCollectionRepository;
    }

    public function execute()
    {
        $modulCollections = $this->modulCollectionRepository->modulCollection();

        $head = [
            'title' => 'Админка - Модульная коллекция. MDR',
            'description' => 'Админка - Создание, правки и удаления Модульных коллекций'
        ];

        return view ('/app-page/admin-page/admin-box/modul-collection/modul-collection',
            ['modulCollections' => $modulCollections, 'head' => $head]);
    }

}
