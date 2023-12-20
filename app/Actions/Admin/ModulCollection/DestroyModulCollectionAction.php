<?php

namespace App\Actions\Admin\ModulCollection;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ModulCollection\ModulCollectionRepository;

class DestroyModulCollectionAction extends Controller
{
    public $action;

    public function __construct(ModulCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id)
    {
        $this->action->destroyModulCollection($id);

        return redirect()->route('modulCollection.show')->with('success', 'Модульная коллекция удалена');
    }

}
