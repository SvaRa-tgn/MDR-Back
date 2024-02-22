<?php
namespace App\Actions\Admin\Users;

use App\Repositories\Page\Users\UsersRepository;
use Transliterate;

class DestroyUserAction
{
    public $action;

    public function __construct(UsersRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id)
    {
        $this->action->destroyUser($id);

        return response()->Json(route('users'));
    }
}
