<?php

namespace App\Actions\Admin\Head;

use App\Http\Controllers\Controller;
use App\Services\Admin\Head\HeadAdminService;
use Illuminate\View\View;

class HeadAdminAction extends Controller
{

    public $service;

    public function __construct(HeadAdminService $service)
    {
        $this->service = $service;
    }

    public function execute(): View
    {
        $head = $this->service->title();

        return view('/app-page/admin-page/admin-box/head/head-admin', compact('head'));
    }

}
