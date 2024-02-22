<?php
namespace App\Actions\Admin\Users;

use App\DTO\DTOupdateUserRole;
use App\Http\Controllers\Controller;
use App\Repositories\Page\Users\UsersRepository;

class UpdateUserRoleAction extends Controller
{
    public $action;

    public function __construct(UsersRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id)
    {
        $user = $this->action->updateUserRole(DTOupdateUserRole::fromUpdateUserRoleRequest($request), $id);

        return redirect()->route('editUser', $user->id)->with('success', 'Роль пользователя изменена');
    }

}
