<?php
namespace App\Actions\Admin\Users;

use App\DTO\DTOupdateUserRole;
use App\Http\Requests\AdminPage\Users\UpdateUserRoleRequest;
use App\Repositories\Page\Users\UsersRepository;
use Illuminate\Http\RedirectResponse;

class UpdateUserRoleAction
{
    public function __construct(private UsersRepository $repository){}

    public function execute(UpdateUserRoleRequest $request, int $id): RedirectResponse
    {
        $user = $this->repository->userFind($id);

        $this->repository->updateUserRole(DTOupdateUserRole::fromUpdateUserRoleRequest($request), $user);

        return redirect()->route('editUser', $user->id);
    }

}
