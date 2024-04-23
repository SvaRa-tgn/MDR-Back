<?php
namespace App\Actions\Admin\Users;

use App\DTO\DTOupdateUserPassword;
use App\Http\Requests\UsersUpdate\UpdateUserPasswordRequest;
use App\Repositories\Page\Users\UsersRepository;
use Illuminate\Http\JsonResponse;
use Transliterate;

class UpdatePasswordUserAction
{
    public function __construct(private UsersRepository $repository){}

    public function execute(UpdateUserPasswordRequest $request, int $id): JsonResponse
    {
        $this->repository->updateUserPassword(DTOupdateUserPassword::fromUpdateUserPasswordRequest($request), $this->repository->userFind($id));

        return response()->json(route('editUser', $id));
    }
}
