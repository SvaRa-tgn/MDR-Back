<?php


namespace App\Http\Controllers\Page\InfoPage;

use App\Actions\InfoPage\HowDesignOrderAction;
use Illuminate\View\View;

class HowDesignOrderController extends HowDesignOrderAction
{
    public function howDesignOrder(HowDesignOrderAction $action): View
    {
        return $action->execute();
    }
}
