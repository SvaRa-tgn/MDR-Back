<?php

namespace App\Actions\Admin\Excel;

use App\Services\Admin\Excel\ExcelService;
use Illuminate\View\View;

class ExcelAction
{
    public function __construct(private ExcelService $service){}

    public function execute(): View
    {
        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/excel/excel', compact('head'));
    }

}
