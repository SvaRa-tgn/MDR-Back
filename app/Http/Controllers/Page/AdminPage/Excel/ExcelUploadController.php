<?php


namespace App\Http\Controllers\Page\AdminPage\Excel;

use App\Actions\Admin\Excel\ExcelUploadAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Excel\ExcelRequest;
use Illuminate\Http\RedirectResponse;

class ExcelUploadController extends Controller
{
    public function excelupload(ExcelUploadAction $action, ExcelRequest $request): RedirectResponse
    {
        return $action->execute($request);
    }

}
