<?php
namespace App\Repositories\Page\AdminPage\Excel\Interfaces;


interface ExcelInterfaces
{
    public function excelupload($request);

    public function destroyExcel($path);
}
