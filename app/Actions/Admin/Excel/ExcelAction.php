<?php

namespace App\Actions\Admin\Excel;

use App\Services\Admin\Excel\ExcelService;
use Illuminate\View\View;

class ExcelAction
{
    public $service;

    public function __construct(ExcelService $service)
    {
        $this->service = $service;
    }

    public function execute(): View
    {

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/excel/excel', compact('head'));
    }

}
