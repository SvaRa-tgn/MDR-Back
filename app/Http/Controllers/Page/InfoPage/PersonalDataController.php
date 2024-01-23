<?php


namespace App\Http\Controllers\Page\InfoPage;

use App\Actions\InfoPage\PersonalDataAction;

class PersonalDataController extends PersonalDataAction
{
    public function personalData(PersonalDataAction $action)
    {
        return $action->execute();
    }
}
