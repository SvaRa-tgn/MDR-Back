<?php


namespace App\Http\Controllers\Page\AdminPage\Excel;

use App\Actions\Admin\Excel\ExcelUploadAction;
use App\Http\Requests\AdminPage\Excel\ExcelRequest;

class ExcelUploadController extends ExcelUploadAction
{
    public function excelupload(ExcelUploadAction $action, ExcelRequest $request)
    {
        return $action->execute($request);
    }

}
