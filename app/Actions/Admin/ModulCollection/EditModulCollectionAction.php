<?php

namespace App\Actions\Admin\ModulCollection;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ModulCollection\ModulCollectionRepository;
use App\Services\Admin\ModulCollection\EditModulCollectionService;

class EditModulCollectionAction extends Controller
{
    public $action;

    private $service;

    public function __construct(ModulCollectionRepository $action, EditModulCollectionService $service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute($slug_modul_collection)
    {
        $modul_collection = $this->action->editModulCollection($slug_modul_collection);

        $head = $this->service->title($modul_collection);

        return view ('/app-page/admin-page/admin-box/modul-collection/edit-modul-collection',
            ['modul_collection' => $modul_collection, 'head' => $head]);
    }

}
