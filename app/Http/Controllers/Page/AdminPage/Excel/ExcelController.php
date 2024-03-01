<?php

namespace App\Http\Controllers\Page\AdminPage\Excel;

use App\Actions\Admin\Excel\ExcelAction;
use App\Http\Controllers\Controller;

class ExcelController extends Controller
{
    public function excel(ExcelAction $action)
    {
        return $action->execute();
    }

}
