<?php

namespace App\Actions\Admin\ModulCollection;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ModulCollection\ModulCollectionRepository;
use App\Services\Admin\ModulCollection\ModulCollectionService;

class ModulCollectionAction extends Controller
{
    public $action;

    private $service;

    public function __construct(ModulCollectionRepository $action, ModulCollectionService $service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute()
    {
        $modulCollections = $this->action->modulCollection();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/modul-collection/modul-collection',
            ['modulCollections' => $modulCollections, 'head' => $head]);
    }

}
