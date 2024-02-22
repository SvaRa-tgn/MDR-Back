<?php

namespace App\Http\Controllers\Page\AdminPage\Excel;

use App\Actions\Admin\Excel\ExcelAction;

class ExcelController extends ExcelAction
{
    public function excel(ExcelAction $action)
    {
        return $action->execute();
    }

}
