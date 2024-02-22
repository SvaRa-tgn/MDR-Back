<?php

namespace App\Repositories\Page\AdminPage\Excel;

use App\Repositories\Page\AdminPage\Excel\Interfaces\ExcelInterfaces;
use Illuminate\Support\Facades\Storage;
use Transliterate;

class ExcelRepository implements ExcelInterfaces
{
    public function excelupload($request)
    {
        $path = Storage::putFile('public/excel', $request->excel);

        return $path;
    }

    public function destroyExcel($path)
    {
        Storage::delete($path);
    }

}
