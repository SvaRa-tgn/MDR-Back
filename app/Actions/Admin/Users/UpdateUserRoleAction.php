<?php
namespace App\Actions\Admin\Users;

use App\DTO\DTOupdateUserRole;
use App\Repositories\Page\Users\UsersRepository;
use Illuminate\Http\RedirectResponse;

class UpdateUserRoleAction
{
    public $action;

    public function __construct(UsersRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id): RedirectResponse
    {
        $user = $this->action->updateUserRole(DTOupdateUserRole::fromUpdateUserRoleRequest($request), $id);

        return redirect()->route('editUser', $user->id);
    }

}
