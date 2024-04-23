<?php

namespace App\Http\Controllers\Page\InfoPage;

use App\Actions\InfoPage\PersonalDataAction;
use Illuminate\View\View;

class PersonalDataController extends PersonalDataAction
{
    public function personalData(PersonalDataAction $action): View
    {
        return $action->execute();
    }
}
