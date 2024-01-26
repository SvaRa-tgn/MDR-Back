<?php


namespace App\Http\Controllers\Page\AdminPage\Excel;

use App\Actions\Admin\Excel\ExcelAction;
use App\Http\Requests\AdminPage\Excel\ExcelRequest;

class ExcelController extends ExcelAction
{
    public function excel(ExcelAction $action)
    {
        return $action->execute();
    }

}
