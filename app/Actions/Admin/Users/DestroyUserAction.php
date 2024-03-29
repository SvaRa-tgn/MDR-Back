<?php
namespace App\Actions\Admin\Users;

use App\Repositories\Page\Users\UsersRepository;
use Illuminate\Http\JsonResponse;
use Transliterate;

class DestroyUserAction
{
    public $action;

    public function __construct(UsersRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id): JsonResponse
    {
        $this->action->destroyUser($id);

        return response()->Json(route('users'));
    }
}
