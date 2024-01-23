<?php


namespace App\Http\Controllers\Page\InfoPage;

use App\Actions\InfoPage\HowDesignOrderAction;

class HowDesignOrderController extends HowDesignOrderAction
{
    public function howDesignOrder(HowDesignOrderAction $action)
    {
        return $action->execute();
    }
}
