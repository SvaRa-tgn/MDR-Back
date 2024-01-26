<?php

namespace App\Actions\Admin\Excel;

use App\Http\Controllers\Controller;
use App\Imports\ProductImport;
use App\Repositories\Page\AdminPage\Excel\ExcelRepository;
use Maatwebsite\Excel\Facades\Excel;

class ExcelUploadAction extends Controller
{
    public $action;

    public function __construct(ExcelRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request)
    {
        $path = $this->action->excelupload($request);
        Excel::import(new ProductImport(), $path);
        $this->action->destroyExcel($path);

        return redirect()->route('excel')->with('success', 'Данные сохранены');
    }

}
