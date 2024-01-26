<?php


namespace App\Repositories\Page\AdminPage\Excel;

use App\Models\Category;
use App\Models\CategoryImage;
use App\Repositories\Page\AdminPage\Category\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use Transliterate;

class ExcelRepository
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
