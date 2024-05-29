<?php

namespace App\Actions\Admin\Excel;

use App\Http\Requests\AdminPage\Excel\ExcelRequest;
use App\Imports\ProductImport;
use App\Services\Admin\UpdateStroageService;
use Illuminate\Http\RedirectResponse;
use Maatwebsite\Excel\Facades\Excel;

class ExcelUploadAction
{
    public function execute(ExcelRequest $request): RedirectResponse
    {
        $path = UpdateStroageService::excelupload($request);
        Excel::import(new ProductImport(), $path);
        UpdateStroageService::destroyExcel($path);

        return redirect()->route('excel');
    }
}
