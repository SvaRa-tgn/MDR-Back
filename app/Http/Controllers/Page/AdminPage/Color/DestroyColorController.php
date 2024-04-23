<?php


namespace App\Http\Controllers\Page\AdminPage\Color;

use App\Actions\Admin\Color\DestroyColorAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class DestroyColorController extends Controller
{
    public function destroyColor(DestroyColorAction $action, int $id): JsonResponse
    {
        return $action->execute($id);
    }

}
